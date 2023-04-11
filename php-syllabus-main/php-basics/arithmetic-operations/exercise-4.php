<?php include 'functions.php';

//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is
//the same as factorial of N.

$lower = digitsOnly(readline('Input lower bound:'));
$upper = digitsOnly(readline('Input upper bound:'));
$result = $lower;
$i = $lower;

for ($i; $i <= $upper; $i++) {
    $result = $result * $i;
}

echo 'Result:' . $result . PHP_EOL;
