<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$sum = 0;
foreach ($numbers as $number) {
    $sum = $sum += $number;
}

$avgValue = $sum / 2;

echo 'Average value of the numbers:' . $avgValue . PHP_EOL;