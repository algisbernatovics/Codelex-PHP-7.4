<?php declare (strict_types=1);
//If userInput=false the computer is playing with itself.
//If userInput=true the computer is playing with you.
//While the user input there is option to press "enter" to make a random move.
//Players symbols are Changeable.
//On User input after Regex program take first INT(0-8)
////////////////////////////////////////////////////////
$userInput = true;
$playersArray = array('|O|', '|X|');
////////////////////////////////////////////////////////
$cells = array();
$player1 = $playersArray[0];
$player2 = $playersArray[1];
function newCells(): array
{
    return array('|-|', '|-|', '|-|', '|-|', '|-|', '|-|', '|-|', '|-|', '|-|',);
}

function echoCells(array $cellsArray)
{
    $counter = 0;
    foreach ($cellsArray as $cells) {
        echo $cells;
        $counter++;
        if ($counter % 3 === 0) {
            echo PHP_EOL;
        }
    }
}

function turn(array &$cells, string $player1, bool $userInput, string $player2, array $playersArray)
{
    if ($userInput && findWinner($cells) === NULL && $player1 === $playersArray[0]) {
        do {
            echo '=========' . PHP_EOL;
            echo "|0||1||2|" . PHP_EOL;
            echo "|3||4||5|" . PHP_EOL;
            echo "|6||7||8|" . PHP_EOL;
            echo "You are $player1" . PHP_EOL;
            echo '"Enter" for random turn' . PHP_EOL;
            $X = readline("Or Input Cell Number 0-8:");
            if ($X === "" || $X === " ") {
                do {
                    $X = rand(0, 8);
                } while ($cells[$X] === $player1 || $cells[$X] === $player2);
            }
            $X = preg_replace('/[^0-8]/', "", $X, 0);
            $X = intval(substr($X, 0, 1));
            if ($cells[$X] === $player1 || $cells[$X] === $player2) {
                echo "Cell Full, Try Another." . PHP_EOL;
            }
        } while ($cells[$X] === $player1 || $cells[$X] === $player2 && cellsFull($cells) === false);
        $cells[$X] = $player1;
    }
    if (findWinner($cells) === NULL) {
        do {
            $X = rand(0, 8);
        } while ($cells[$X] === $player1 || $cells[$X] === $player2 && cellsFull($cells) === false);
        if ($userInput && $player1 === $playersArray[1]) {
            $cells[$X] = $player1;
        }
        if (!$userInput) {
            $cells[$X] = $player1;
        }
    } else return;
}

function cellsFull(array $cellsArray): bool
{
    $cellsFull = false;
    if (!in_array("|-|", $cellsArray)) {
        $cellsFull = true;
    }
    return $cellsFull;
}

function findWinner(array $cells)
{
    //Diognale
    if ($cells[0] !== '|-|' && $cells[0] === $cells[4] && $cells[4] === $cells[8]) {
        return $cells[0];
    }
    if ($cells[2] !== '|-|' && $cells[2] === $cells[4] && $cells[4] === $cells[6]) {
        return $cells[2];
    } //Columns
    if ($cells[0] !== '|-|' && $cells[0] === $cells[3] && $cells[3] === $cells[6]) {
        return $cells[0];
    }
    if ($cells[1] !== '|-|' && $cells[1] === $cells[4] && $cells[4] === $cells[7]) {
        return $cells[1];
    }
    if ($cells[2] !== '|-|' && $cells[2] === $cells[5] && $cells[5] === $cells[8]) {
        return $cells[2];
    } //Rows
    if ($cells[0] !== '|-|' && $cells[0] === $cells[1] && $cells[1] === $cells[2]) {
        return $cells[0];
    }
    if ($cells[3] !== '|-|' && $cells[3] === $cells[4] && $cells[4] === $cells[5]) {
        return $cells[3];
    }
    if ($cells[6] !== '|-|' && $cells[6] === $cells[7] && $cells[7] === $cells[8]) {
        return $cells[6];
    } elseif (!in_array("|-|", $cells)) {
        return '|TIE|';
    }
}

function ticTacToe(array $cells, string $player1, string $player2, bool $userInput, array $playersArray)
{
    $cells = newCells();
    do {
        turn($cells, $player1, $userInput, $player2, $playersArray);
        turn($cells, $player2, $userInput, $player1, $playersArray);
        echo echoCells($cells);
        echo '=========' . PHP_EOL;
        if (findWinner($cells) !== NULL) {
            break;
        }
    } while (findWinner($cells) === NULL || cellsFull($cells) === false);
    if (findWinner($cells) === $player1) {
        PHP_EOL;
        echo "Winner $player1 ! " . PHP_EOL;
    }
    if (findWinner($cells) === $player2) {
        PHP_EOL;
        echo "Winner $player2 !" . PHP_EOL;
    }
    if (findWinner($cells) === '|TIE|') {
        echo 'Winner TIE!' . PHP_EOL;
    }
    echo PHP_EOL;
    $confirm = readline('Try again ? Y/N:');
    if ($confirm === 'y' || $confirm === 'Y') {
        ticTacToe($cells, $player1, $player2, $userInput, $playersArray);
    } else {
        exit();
    }
}

<<<<<<< HEAD
ticTacToe($cells, $player1, $player2, $userInput, $playersArray);
=======
ticTacToe($cells, $player1, $player2, $userInput, $playersArray);
>>>>>>> 35d0c8ca74a55ff1aa2db3d6b281481b613d189a
