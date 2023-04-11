<?php

//Create a non associative array with integers and print out only integers that divides by 3 without any left.

$numArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($i = 0; $i < count($numArray); $i++) {
    if ($numArray[$i] % 3 == 0) {
        echo $numArray[$i] . "\n";
    }
}