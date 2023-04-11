<?php

//7
//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50,
//"medium" if the case is higher than 50 but lower than 100,
//"high" if the value is >100.

$number = 19999999999;

if ($number < 50) {
    echo ('LOW') . PHP_EOL;
} elseif ($number > 50 && $number < 100) {
    echo ('MEDIUM') . PHP_EOL;
} elseif ($number > 100) {
    echo ('HIGH') . PHP_EOL;
} else {
    echo('Error - 50 or 100.');
}