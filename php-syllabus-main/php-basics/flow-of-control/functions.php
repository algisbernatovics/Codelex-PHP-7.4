<?php

function digitsOnly(string $value): int
{
    return (int)preg_replace('/[^0-9-]/', "", $value, -1);
}

//Positive Or Negative Digits.

function lettersOnly(string $value): string
{
    return (string)preg_replace('/[^A-Za-z ]/', "", $value, -1);
}

//Function For exercise-5 lettersOnly
//Letters With Spaces Only.

function digitsWithoutNegative(string $value): int
{
    return (int)preg_replace('/[^0-9]/', "", $value, -1);
}

//Function For exercise-5 digitsWithoutNegative
//Only positive Digits.