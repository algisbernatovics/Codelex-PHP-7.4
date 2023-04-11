<?php

//Create a function that accepts 2 integer arguments.
//First argument is a base value and the second one is a value its been multiplied by.
//For example, given argument 10 and 5.php prints out 50

function multipler(int $a, int $b): int
{
    return $a * $b;
}

$c = multipler(readline('Input a:'), readline('Input b:'));

echo 'Result:' . $c;