<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
// respectively.  Otherwise, it shall print "Not a valid day".
//
//Use:
//
//- a "switch-case-default" statement.

for ($i = 0; $i <= 7; $i++) {
    switch ($i) {
        case 0:
            echo "Sunday" . PHP_EOL;
            break;
        case 1:
            echo "Monday" . PHP_EOL;
            break;
        case 2:
            echo "Tuesday" . PHP_EOL;
            break;
        case 3:
            echo "Wednesday" . PHP_EOL;
            break;
        case 4:
            echo "Thursday" . PHP_EOL;
            break;
        case 5:
            echo "Friday" . PHP_EOL;
            break;
        case 6:
            echo "Saturday" . PHP_EOL;
            break;
        default:
            echo 'Invalid day' . PHP_EOL;
            break;
    }
}