<?php

//Create a class Product that represents a product sold in a shop.
//A product has a price, amount and name.
//The class should have:
//  - A constructor `Product  __construct(string name, float startPrice, int amount)`
//- A `function printProduct()` that prints a product in the following form:
//```
//Banana, price 1.1, amount 13
//```
//Test your code by creating a class with main method and add three products there:
//- "Logitech mouse", 70.00 EUR, 14 units
//- "iPhone 5s", 999.99 EUR, 3 units
//- "Epson EB-U05", 440.46 EUR, 1 units
//Print out information about them.
//Add new behaviour to the Product class:
//- possibility to change quantity
//- possibility to change price
//Reflect your changes in a working application.

class Product
{
    protected string $name;
    protected float $startPrice;
    protected int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function setNewPrice(float $newPrice)
    {
        $this->startPrice = $newPrice;
    }

    public function setNewQuantity(int $newQuantity)
    {
        $this->amount = $newQuantity;
    }

    public function getPrintProduct()
    {
        echo $this->name . ',';
        echo ' Price:' . $this->startPrice . ' EUR ,';
        echo ' Amount:' . $this->amount;
        echo PHP_EOL;
    }
}

class Main
{
    private array $products = [];

    public function main()
    {
        $this->products = [

            $product0 = new Product('Banana', 1.1, 13),
            $product1 = new Product('Logitech Mouse', 70.00, 14),
            $product2 = new Product('Iphone 5s', 999.99, 3),
            $product3 = new Product('Epson EB-U05', 440.46, 1)

        ];

        $product0->setNewPrice(6);
        $product0->setNewQuantity(999);

        foreach ($this->products as $product) {
            echo $product->getPrintProduct();

        }
    }
}

new main();
