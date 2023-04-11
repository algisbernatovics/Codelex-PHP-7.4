<?php include 'functions.php';

//On your phone keypad, the alphabets are mapped to digits as follows:
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
//and converts to a sequence of keypad digits.
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

$phoneKeyboard = ['ABC', 'DEF', 'GHI', 'JKL', 'MNO', 'PQRS', 'TUV', 'WXYZ'];
echo '---Phone keyboard---' . PHP_EOL;
$text = lettersOnly(strtoupper(readline('Input Text:')));

for ($h = 0; $h < strlen($text); $h++) {
    for ($i = 0; $i < count($phoneKeyboard); $i++) {
        $phoneButton = str_split($phoneKeyboard[$i]);
        if (is_int(array_search($text[$h], $phoneButton))) {
            for ($j = 0; $j <= array_search($text[$h], $phoneButton); $j++) {
                echo $i + 2;
            }
        } elseif ($text[$h] == ' ') {
            echo ' 0 ';
            break;
        }
    }
}