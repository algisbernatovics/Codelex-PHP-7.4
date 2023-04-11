<?php include 'functions.php';

$num = digitsOnly(readline('Input Number:'));

if ($num > 0) {
    echo $num . " is a positive number." . PHP_EOL;
} else if ($num < 0) {
    echo $num . " is a negative number." . PHP_EOL;
} else if ($num == 0) {
    echo "You have entered zero." . PHP_EOL;
}