<?php include 'functions.php';

$numberOfNums = 3;
$nums = [];
for ($i = 0; $i < $numberOfNums; $i++) {
    $nums[$i] = digitsOnly(readline('Input the 1st number:'));
}

echo 'Largest number is:' . max($nums) . PHP_EOL;
