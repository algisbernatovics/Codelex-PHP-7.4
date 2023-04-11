<?php
function digits(string $value): int
{
    return (int)preg_replace('/[^0-9]/', "", $value, -1);
}
//Function For weather-report Regex Digits only (Without Negative Digits);