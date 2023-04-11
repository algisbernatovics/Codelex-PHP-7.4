<?php include "functions.php";

//Write a program that reads an positive integer and count the number of digits the number has.

$num = digitsWithoutNegative(readline('Input integer number:'));

echo 'Number ' . $num . ' has ' . strlen($num) . ' digits.' . PHP_EOL;


