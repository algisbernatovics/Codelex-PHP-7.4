<?php include "functions.php";

//Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department of Labor
//requires that employees get paid time and a half for any hours over 40 that they work in a single week. For example,if an
//employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts requires
//that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee not work more than 60 hours in
//a week.

$baseHours = 40;
$maxHours = 60;
$maxPayMultipler = 1.5;

$employees = [
    1 => createEmploye('Employee1', 35, 750, 0),
    2 => createEmploye('Employee2', 47, 820, 0),
    3 => createEmploye('Employee3', 73, 999, 0),
];

foreach ($employees as $key => $employee) {
    switch ($employee->hours) {
        case $employee->hours <= $baseHours:
            $employee->salary = $employee->basePay * $employee->hours;
            break;
            
        case $employee->hours > $baseHours && $employee->hours <= $maxHours:
            $employee->salary = $employee->basePay * $baseHours;
            $employee->salary += ($employee->hours - $baseHours) * ($maxPayMultipler * $employee->basePay);
            break;

        case $employee->hours > $maxHours:
            $employee->salary = $employee->basePay * $baseHours;
            $employee->salary += ($maxHours - $baseHours) * ($maxPayMultipler * $employee->basePay);
            break;

    }
}

echo '| Employee | Base Pay | Hours Worked | Salary |' . PHP_EOL;
echo '| ---      | ---      | ---          |' . PHP_EOL;

foreach ($employees as $employee) {
    echo '|' . $employee->name . ' |$' . number_format($employee->basePay / 100, 2) . '     |'
        . $employee->hours . '            |$' . number_format($employee->salary / 100, 2) . ' |';
    echo PHP_EOL;
}