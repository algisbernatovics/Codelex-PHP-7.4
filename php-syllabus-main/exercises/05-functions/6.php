<?php

//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).

$array = [1, 2, 3, 4.4, 'cat'];
function modArray(array $inputArr): array
{
    for ($i = 0; $i < count($inputArr); $i++) {
        if (is_int($inputArr[$i])) {
            $inputArr[$i] = $inputArr[$i] * $inputArr[$i];
        }
    }
    return $inputArr;
}

function echoDoubles(array $inputArr)
{
    for ($i = 0; $i < count($inputArr); $i++) {
        if (is_int($inputArr[$i])) {
            echo $inputArr[$i] . PHP_EOL;
        }
    }
}

$array = modArray($array);
echoDoubles($array);
