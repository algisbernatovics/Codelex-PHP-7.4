<?php include 'functions.php';

//Write a program that picks a random number from 1-100. Give the user a chance to guess it.
//If they get it right, tell them so. If their guess is higher than the number, say "Too high."
//If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

$min = 1;
$max = 100;

echo "Im thinking of a number between $min-$max" . PHP_EOL;
echo 'Try To guess.' . PHP_EOL;

$randomNumber = rand($min, $max);
$inputNumber = digitsOnly(readline('Input number:'));

if ($inputNumber > $randomNumber) {
    echo 'Too High!. I am thinking ' . $randomNumber . PHP_EOL;
}
if ($inputNumber < $randomNumber) {
    echo 'Too Low!. I am thinking ' . $randomNumber . PHP_EOL;
}
if ($inputNumber == $randomNumber) {
    echo 'You Guessed the number!.' . PHP_EOL;
}

echo 'Bye.' . PHP_EOL;

exit();
