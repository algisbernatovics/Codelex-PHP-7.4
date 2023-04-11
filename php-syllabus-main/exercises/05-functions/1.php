<?php

//Create a function that accepts any string and returns
//the same value with added "codelex" by the end of it.
//Print this value out.

function addCodelex(string $readedStr): string
{
    return $readedStr . 'Codelex' . PHP_EOL;
}

echo 'Output String:' . addCodelex(readline('Input String:'));