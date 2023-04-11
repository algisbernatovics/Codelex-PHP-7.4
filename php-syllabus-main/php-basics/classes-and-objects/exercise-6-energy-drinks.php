<?php declare (strict_types=1);

//## Exercise #6
//
//    See [exercise-6-energy-drinks.php](./exercise-6-energy-drinks.php)
//
//A soft drink company recently surveyed 12,467 of its customers
//and found that approximately 14 percent of those surveyed
//purchase one or more energy drinks per week.
//Of those customers who purchase energy drinks, approximately 64 percent of them prefer
// citrus flavored energy drinks.
//
//Write a program that displays the following:
//
//- The approximate number of customers in the survey who purchased one or more energy drinks per week
//- The approximate number of customers in the survey who prefer citrus flavored energy drinks

$numberSurveyed = 12467;
$purchasedEnergyDrinks = 14;
$purchasedCitrusDrinks = 64;

function calculateEnergyDrinkers(int $numberSurveyed, int $purchasedEnergyDrinks): int
{
    return intval($numberSurveyed / 100) * $purchasedEnergyDrinks;
}

function calculateCitrusDrinkers(int $numberSurveyed, int $purchasedCitrusDrinks): int
{
    return intval($numberSurveyed / 100) * $purchasedCitrusDrinks;
}

$energyDrinkers = calculateEnergyDrinkers($numberSurveyed, $purchasedEnergyDrinks);
$citrusDrinkers = calculateCitrusDrinkers($numberSurveyed, $purchasedCitrusDrinks);

echo PHP_EOL;
echo "Total number of people surveyed " . $numberSurveyed . '.' . PHP_EOL;
echo "Approximately " . $energyDrinkers . '.' . " bought at least one energy drink." . PHP_EOL;
echo $citrusDrinkers . " of those " . "prefer citrus flavored energy drinks.";