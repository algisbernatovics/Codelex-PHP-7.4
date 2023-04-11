<?php include 'functions.php';

//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
//or “Even Number” otherwise. The program shall always print “bye!” before exiting.

$int = digitsOnly(readline('Input Number:'));

if ($int % 2 == 0) {
    echo $int . ' Is Even.';
} else {
    echo $int . ' Is Odd.';
}

echo PHP_EOL;
echo 'Bye';
echo PHP_EOL;
