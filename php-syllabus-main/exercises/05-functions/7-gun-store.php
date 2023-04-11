<?php

//Imagine you own a gun store./////////////////////////////////////////////////////////////////////
//Only certain guns can be purchased with license types.///////////////////////////////////////////
//Create an object (person) that will be the requester to purchase a gun (object)//////////////////
//Person object has a name, valid licenses (multiple) & cash.//////////////////////////////////////
//Guns are objects stored within an array./////////////////////////////////////////////////////////
//Each gun has license letter, price & name.///////////////////////////////////////////////////////
//Using PHP in-built functions determine if the requester (person) can buy a gun from the store.///

$person = new stdClass();
$person->name = "John";
$person->licence = 'A,B,C';
$person->cash = 10000;

function createWeapon(string $name, string $licence, int $price): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->licence = $licence;
    $weapon->price = $price;
    return $weapon;
}

$guns = [
    '92FS' => createWeapon('92FS', 'A', 500),
    'M4A1' => createWeapon('M4A1', 'B', 1000),
    'P90' => createWeapon('P90', 'D', 5000),
    'AUG' => createWeapon('AUG', 'P', 12000),
    'PSG1' => createWeapon('PSG1', 'C', 80000),
    'PANZER' => createWeapon('PANZER', 'PZ', 9000000)
];

function availableWeapons(array $guns)
{
    echo 'Guns available:' . PHP_EOL;
    foreach ($guns as $gun) {
        echo $gun->name . ':' . $gun->price . '$' . PHP_EOL;
    }
}

function tryToBuy(array $guns, stdClass $person)
{
    $requestedGun = $guns[readline('Select gun :')];
    if (is_int(strpos($person->licence, $requestedGun->licence)) && $requestedGun->price <= $person->cash) {
        $person->cash = $person->cash - $requestedGun->price;
        echo 'You have bought ' . $requestedGun->name . '.' . PHP_EOL . 'Thanks You.' . PHP_EOL;
        echo 'Your Cash:' . $person->cash . PHP_EOL;
        unset($guns[$requestedGun->name]);
        unset($requestedGun);
        availableWeapons($guns);
        tryToBuy($guns, $person);

    } else if ($requestedGun == NULL) {
        echo 'Weapon not found. Try Again!' . PHP_EOL;
        tryToBuy($guns, $person);

    } else if ($requestedGun->price > $person->cash) {
        echo ('Not Enaught Cash. Your Cash:' . $person->cash . '$ Try to buy another gun.') . PHP_EOL;

        tryToBuy($guns, $person);

    } else if (!is_int(strpos($person->licence, $requestedGun->licence))) {
        echo ('You are not allowed to buy this gun!') . PHP_EOL;
        echo ('Try to buy another gun') . PHP_EOL;
        tryToBuy($guns, $person);
    }
}

availableWeapons($guns);
tryToBuy($guns, $person);