<?php

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    [
        "name" => 'Apple',
        "weight" => 10
    ],
    [
        "name" => 'Lemon',
        "weight" => 20
    ],
    [
        "name" => 'Banana',
        "weight" => 50
    ],
];

$costs = [
    "10" => 1,
    "20" => 2,
    "30" => 3,
    "40" => 4,
    "50" => 5
];
function listFruits(array $fruits, int $costs)
{
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i]['name'] . ' ' . $fruits[$i]['weight'] . 'KG Available for' . ' ' .
            $costs[$fruits[$i]['weight']] . 'EUR' . PHP_EOL;
    }
}

listFruits($fruits, $costs);