<?php

function digitsOnly(string $value): int
{
    return (int)preg_replace('/[^0-9]/', "", $value, -1);
}

//exercise-10 Function digitsOnly

function newLine(int $newLineCounter)
{
    if ($newLineCounter % 11 == 0) {
        echo PHP_EOL;
    }
}

//exercise-6 Function newLine

function createEmploye(string $name, int $hours, int $basePay, int $salary): stdClass
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->hours = $hours;
    $employee->basePay = $basePay;
    $employee->salary = $salary;
    return $employee;
}
//exercise-8 Function createEmploye;