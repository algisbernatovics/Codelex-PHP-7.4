<?php declare (strict_types=1);

//## Exercise #2
//Write a method named `swapPoints` that accepts two Points as parameters and swaps their x/y values.
//Consider the following example code that calls swapPoints:
//```php
//$p1 = new Point(5, 2);
//$p2 = new Point(-3, 6);
//$p1->swapPoints($p1, $p2);
//
//echo "(" . $p1->x . ", " . $p1->y . ")";
//echo "(" . $p2->x . ", " . $p2->y . ")";
//```
//The output produced from the above code should be:
//```
//(-3, 6)
//(5, 2)
//```

class Point
{
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function echoPoints(Point $p1, Point $p2)
    {
        echo "(" . $p1->x . ", " . $p1->y . ")";
        echo "(" . $p2->x . ", " . $p2->y . ")" . PHP_EOL;
    }

    public static function swapPoint(Point &$p1, Point &$p2)
    {
        $dump = $p1;
        $p1 = $p2;
        $p2 = $dump;
    }
}

class Main
{
    protected Point $p1;
    protected Point $p2;

    public function __construct()
    {
        $this->p1 = new Point(5, 2);
        $this->p2 = new Point(-3, 6);
        Point::echoPoints($this->p1, $this->p2);
        Point::swapPoint($this->p1, $this->p2);
        Point::echoPoints($this->p1, $this->p2);
    }
}

new main();

