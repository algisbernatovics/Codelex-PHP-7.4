<?php

//4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.

$numForChk = 4.25632874693824;

if (is_float($numForChk) && $numForChk % 2 == 0 && $numForChk > 0) {
    echo ('Value Is Float,Even,And greater than 0.') . PHP_EOL;
} else {
    echo ('Value is NOT float,even,or greater than 0.') . PHP_EOL;
}