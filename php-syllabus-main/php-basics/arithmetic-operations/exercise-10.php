<?php include 'functions.php';

//Formulas From Here
//https://www.ahirlabs.com/programing/php/finding-area/

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit\n";

$pi = 3.14;

$choice = readline('Enter your choice (1-4) :');

switch ($choice) {
    case 1:
        $radius = digitsOnly(readline('Circle radius (Cm):'));
        $area = $pi * $radius * $radius;
        echo 'Circle area is :' . $area . ' Cm2' . PHP_EOL;
        break;
    case 2:
        $length = digitsOnly(readline('Rectangle length (Cm):'));
        $width = digitsOnly(readline('Rectangle width (Cm):'));
        $area = $length * $width;
        echo 'Rectangle area is :' . $area . ' Cm2' . PHP_EOL;
        break;
    case 3:
        $base = digitsOnly(readline('Triangle base (Cm):'));
        $height = digitsOnly(readline('Triangle height (Cm):'));
        $area = 0.5 * $base * $height;
        echo 'Triangle area is:' . $area . ' Cm2' . PHP_EOL;
        break;
    case 4:
        exit();
}