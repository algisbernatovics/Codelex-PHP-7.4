<?php include "functions.php";

//Write a program that calculates and displays a person's body mass index (BMI).
//A person's BMI is calculated with the following formula: ```BMI = weight x 703 / height ^ 2```.
//Where weight is measured in pounds and height is measured in inches.
//Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
//A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
//If the BMI is less than 18.5, the person is considered underweight.
//If the BMI value is greater than 25, the person is considered overweight.
//Your program must accept metric units.

echo 'BMI Calculator.' . PHP_EOL;

$height = digitsOnly(readline('Input Height in Cm:')) / 100;
$weight = digitsOnly(readline(('Input Weight in Kg:')));

$BMIIndex = round($weight / pow($height, 2));

if ($BMIIndex < 18.5) {
    echo "Underweight.";
} else if ($BMIIndex <= 24.9) {
    echo "Normal Weight.";
} else {
    echo "OverWeight.";
}

echo PHP_EOL;
echo 'BMI:' . $BMIIndex . PHP_EOL;