<?php declare (strict_types=1);
//## Exercise #3
//
//For this exercise, you will design a set of classes that work together to simulate a car's fuel gauge
//and odometer. The classes you will design are the following:
//
//The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:
//
// - To know the car’s current amount of fuel, in liters.
// - To report the car’s current amount of fuel, in liters.
// - To be able to increment the amount of fuel by 1 liter.
// This simulates putting fuel in the car. ( The car can hold a maximum of 70 liters.)
// - To be able to decrement the amount of fuel by 1 liter,
// if the amount of fuel is greater than 0 liters. This simulates burning fuel as the car runs.
//
//The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:
//
// - To know the car’s current mileage.
// - To report the car’s current mileage.
// - To be able to increment the current mileage by 1 kilometer.
// The maximum mileage the odometer can store is 999,999 kilometer.
// When this amount is exceeded, the odometer resets the current mileage to 0.
// - To be able to work with a FuelGauge object.
// It should decrease the FuelGauge object’s current amount of fuel by 1
// liter for every 10 kilometers traveled. (The car’s fuel economy is 10 kilometers per liter.)
//
//Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel,
//and then run a loop that increments the odometer until the car runs out of fuel.
//During each loop iteration, print the car’s current mileage and amount of fuel.

class FuelGauge
{
    protected int $fuelLevel;

    public function __construct(int $fuelLevel = 70)
    {
        if ($fuelLevel > 70) {
            echo 'The car can hold a maximum of 70 liters!' . PHP_EOL;
            exit();
        }
        $this->fuelLevel = $fuelLevel;
    }

    public function decreaseFuelLevel()
    {
        $this->fuelLevel -= 1;
    }

    public function reportFuelLevel(): int
    {
        return $this->fuelLevel;
    }
}

class Odometer
{
    protected int $mileage;
    protected int $counter = 0;

    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }

    public function increaseMileage(object $fuelGauge)
    {
        $this->counter++;
        $this->mileage += 1;
        if ($this->counter % 10 === 0) {
            $fuelGauge->decreaseFuelLevel();
        }
    }

    public function reportMileage(): int
    {
        return $this->mileage;
    }
}

$fuelGauge = new fuelGauge(70);
$odometer = new odometer(360000);
$Drive = new Car($fuelGauge, $odometer);

class Car
{
    protected object $fuelGauge;
    protected object $odometer;

    public function __construct($fuelGauge, $odometer)
    {
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
        do {
            sleep(1);
            system('clear');
            echo PHP_EOL;
            echo 'Fuel level:' . $this->fuelGauge->reportFuelLevel() . 'L' . PHP_EOL;

            $this->odometer->increaseMileage($this->fuelGauge);

            echo 'Odometer:' . $this->odometer->reportMileage() . 'Km' . PHP_EOL;
        } while ($this->fuelGauge->reportFuelLevel() > 0);
        echo 'Fuel Tank Empty !' . PHP_EOL;
    }
}




