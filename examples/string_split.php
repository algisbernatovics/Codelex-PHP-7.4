<?php

echo 'First array';
//Without seperator->
$string = "AAAABBBCCDAABBB";
$array = str_split($string);
var_dump($array);


echo 'Second array';
//With seperator->
$string = "AAAA BBB CC D AA BBB";
$array = explode(' ', $string);
var_dump($array);