<?php include 'functions.php';

//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

$intFirst = digitsOnly(readline('Input First Digit:'));
$intSecond = digitsOnly(readline('Input Second Digit:'));
$sum = $intFirst + $intSecond;
$difference = $intFirst - $intSecond;

if ($intFirst == 15 || $intSecond == 15 || $sum == 15 || $difference == 15) {
    return true;
} else {
    return false;
}