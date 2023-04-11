<?php include 'functions.php';

//Write a program called `coza-loza-woza.php` which prints the numbers 1 to 110, 11 numbers per line.
//The program shall print "Coza" in place of the numbers which are multiples of 3,
//"Loza" for multiples of 5, "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5,
//and so on. The output shall look like:

$newLineCounter = 0;

for ($i = 1; $i < 110; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'CozaLoza ';
        $newLineCounter++;
        newLine($newLineCounter);
    } elseif ($i % 7 == 0) {
        echo 'Woza ';
        $newLineCounter++;
        newLine($newLineCounter);
    } elseif ($i % 3 == 0) {
        echo 'Coza ';
        $newLineCounter++;
        newLine($newLineCounter);
    } elseif ($i % 5 == 0) {
        echo 'Loza ';
        $newLineCounter++;
        newLine($newLineCounter);
    } else {
        echo $i . ' ';
        $newLineCounter++;
        newLine($newLineCounter);
    }

}
