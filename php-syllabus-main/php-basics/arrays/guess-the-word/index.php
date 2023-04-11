<?php declare (strict_types=1);

$words = array('Terminator', 'Programmer', 'Codelex', 'Laptop', 'klara');

function takeWord(array &$words): array
{
    $index = array_rand($words);
    $takedWord = str_split(strtoupper($words[$index]));
    unset($words[$index]);
    return $takedWord;
}

function createMask(array $currentWord): array
{
    $mask = '';
    for ($i = 0; $i < count($currentWord); $i++) {
        $mask = $mask . '-';
    }
    return str_split($mask);
}

function play(array $currentWord, array $mask, array $words)
{
    $counter = 3;
    for ($i = 0; $i < $counter; $i++) {
        foreach ($mask as $letter) {
            echo "$letter";
        }
        echo '  ';

        $input = strtoupper(readline('Input letter:'));
        $index = array_search($input, $currentWord);
        if (is_int($index)) {
            echo 'Correct!' . PHP_EOL;
        } elseif (!is_int($index)) {
            echo 'Incorrect!' . PHP_EOL;
            $counter--;
        }
        while (is_int($index)) {
            $mask[$index] = $input;
            $currentWord[$index] = '-';
            $index = array_search($input, $currentWord);
        }
        $counter++;
        $guessed = (!in_array('-', $mask));
        if ($guessed) {
            echo implode($mask) . ' Guessed! ' . PHP_EOL;
            start($words);
        }
    }
    echo 'Game Over!' . PHP_EOL;
    exit();
}

function start(array $words)
{
    while (0 < count($words)) {
        $currentWord = takeWord($words);
        $mask = createMask($currentWord);
        play($currentWord, $mask, $words);
    }
    echo 'There is no more words to Guess.' . PHP_EOL;
    exit();
}

start($words);