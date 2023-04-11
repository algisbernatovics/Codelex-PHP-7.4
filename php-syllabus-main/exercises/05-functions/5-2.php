<?php

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    [
        "name" => 'Apple',
        "weight" => 9.9,
        "price" => 5.51
    ],
    [
        "name" => 'Kiwi',
        "weight" => 6,
        "price" => 9.99
    ],
    [
        "name" => 'Lemon',
        "weight" => 32,
        "price" => 15.99
    ],
    [
        "name" => 'Banana',
        "weight" => 64,
        "price" => 30.45
    ],
    [
        "name" => 'Watermelone',
        "weight" => 15,
        "price" => 20
    ],
];

$shippingCosts = [
    'economyShipping' => 1,
    'standartShipping' => 2,

];

function determinateShipping(array $shippingCosts, array $fruits, int $i)
{
    if ($fruits[$i]['weight'] <= 10) {
        echo 'Shipping costs : ' . $shippingCosts['economyShipping'] . '$' . PHP_EOL . PHP_EOL;
    }
    if ($fruits[$i]['weight'] > 10) {
        echo 'Shipping costs : ' . $shippingCosts['standartShipping'] . '$' . PHP_EOL . PHP_EOL;
    }
}

function listFruits($fruits, $shippingCosts)
{
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i]['name'] . ' ' . PHP_EOL . $fruits[$i]['weight'] . 'KG Available for' . ' ' . $fruits[$i]['price'] . '$ ' . PHP_EOL;
        determinateShipping($shippingCosts, $fruits, $i) . PHP_EOL;
    }
}

listFruits($fruits, $shippingCosts);