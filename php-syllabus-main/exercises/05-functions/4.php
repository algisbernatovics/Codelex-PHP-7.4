<?php

//Create a array of objects that uses the function of exercise 3
//but in loop printing out if the person has reached age of 18.

$persons = [
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 12
    ],
    [
        "name" => "Algis",
        "surname" => "Bernatovics",
        "age" => 18
    ]
];

function checkAge(array $inputObj)
{
    for ($i = 0; $i < count($inputObj); $i++) {
        if ($inputObj[$i]['age'] >= 18) {
            echo $inputObj[$i]['name'] . ' ' . $inputObj[$i]['surname'] . ' ' . 'Has reached 18' . PHP_EOL;
        } else {
            echo $inputObj[$i]['name'] . ' ' . $inputObj[$i]['surname'] . ' ' . 'Has not reached 18' . PHP_EOL;
        }

    }
}

checkAge($persons);
