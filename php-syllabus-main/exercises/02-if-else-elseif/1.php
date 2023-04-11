<?php

//1
//Given variables (int) 10, string "10" determine if they both are the same.

$intNum = 10;
$strInt = '10';

if ($intNum === $strInt) {
    echo ("Varibles Have same value and data type.") . PHP_EOL;
} elseif ($intNum == $strInt) {
    echo ("Varibles Have same value, but different data types.") . PHP_EOL;
} else {
    echo ("Values is not equal.") . PHP_EOL;
}