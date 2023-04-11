<?php declare (strict_types=1);
$playerSelection = NULL;

function createGameObj(string $name, array $beats): stdClass
{
    $gameObj = new stdClass();
    $gameObj->name = $name;
    $gameObj->beats = $beats;
    return $gameObj;
}

$ArrayOfGameElements = [
    '0' => createGameObj('Dynamite', $beats = [Scissors, Lizard, Spock, Rock, Paper]),
    '1' => createGameObj('Rock', $beats = [Scissors, Lizard]),
    '2' => createGameObj('Paper', $beats = [Rock, Spock]),
    '3' => createGameObj('Spock', $beats = [Rock, Scissors]),
    '4' => createGameObj('Scissors', $beats = [Paper, Lizard]),
    '5' => createGameObj('Lizard', $beats = [Paper, Spock])
];

function pcSelection($ArrayOfGameElements): stdClass
{
    return ($ArrayOfGameElements[array_rand($ArrayOfGameElements)]);
}

function playerSelectionList(array $ArrayOfGameElements)
{
    for ($i = 0; $i < count($ArrayOfGameElements); $i++) {
        echo "$i" . ' ' . $ArrayOfGameElements[$i]->name . PHP_EOL;
    }
    echo 'or exit to exit game' . PHP_EOL;
}

function playerSelection(array $ArrayOfGameElements)

{
    $userInput = readline('Select one by number:');
    while (!is_object($ArrayOfGameElements[$userInput])) {
        if ($userInput == 'exit') {
            exit;
        }
        $userInput = readline('Incorrect!Please Try Again:');
    }
    return $ArrayOfGameElements[$userInput];
}

function playGame(stdClass $pcSelection, stdClass $playerSelection)
{
    if ($playerSelection->name == $pcSelection->name) {
        echo 'Its a draw!' . PHP_EOL;
    } else {
        if (in_array($pcSelection->name, $playerSelection->beats)) {
            echo 'Player Win!' . PHP_EOL;
        } elseif (!in_array($pcSelection->name, $playerSelection->beats)) {
            echo 'PC Win!' . PHP_EOL;
        }
    }
}

while ($playerSelection !== 'exit') {
    $pcSelection = pcSelection($ArrayOfGameElements);
    playerSelectionList($ArrayOfGameElements);
    $playerSelection = playerSelection($ArrayOfGameElements);

    echo 'PC Selection:' . $pcSelection->name . PHP_EOL;
    echo 'Player Selection:' . $playerSelection->name . PHP_EOL;

    playGame($pcSelection, $playerSelection);
}

