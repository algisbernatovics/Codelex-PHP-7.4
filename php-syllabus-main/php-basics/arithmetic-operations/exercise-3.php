<?php include 'functions.php';

//Write a program to produce the sum of 1, 2, 3, ..., to 100.
//Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
//Also compute and display the average. The output shall look like:
//The sum of 1 to 100 is 5050
//The average is 50.5

$lower = digitsOnly(readline('Input lower bound:'));
$upper = digitsOnly(readline('Input upper bound:'));
$sum = 0;
$avg = 0;
$i = $lower;

for ($i; $i <= $upper; $i++) {
    $sum = $sum + $i;
    $avg = $sum / $upper;
}

echo "The sum of $lower to $upper is $sum" . PHP_EOL;
echo "The average is $avg" . PHP_EOL;
