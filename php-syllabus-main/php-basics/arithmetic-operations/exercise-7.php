<?php

//Modify the example program to compute the position of an object after falling for 10 seconds,
//outputting the position in
//meters. The formula in Math notation is:
//*Note:* The correct value is -490.5m.

$a = 9.81;
$t = 10;
$vi = 0;
$xi = 0;

$result = $a * pow(10, 2) * 0.5 + $vi * $t + $xi;
echo number_format($result, 1) . 'm' . PHP_EOL;
