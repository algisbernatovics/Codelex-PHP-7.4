<?php

//6
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.

$plateNumber = 'HN3602';

switch ($plateNumber) {
    case HN3602:
        echo ('It is my Car Volvo with plate number ' . $plateNumber) . PHP_EOL;
        break;
    default:
        echo ('That is not my car.') . PHP_EOL;
}
