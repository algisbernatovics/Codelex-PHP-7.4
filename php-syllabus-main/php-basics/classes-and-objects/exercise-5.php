<?php declare (strict_types=1);

//## Exercise #5
//
//Create a class called *Date* that includes: three pieces of information as instance variables — a day, a
//month and a year.
//
//Your class should have a constructor that initializes the three instance variables and assumes that the values provided are correct.
//Provide a set and a get for each instance variable.
//
//Provide a method DisplayDate that displays the day, month and year separated by forward slashes */*.
//
//Write a test application named DateTest that demonstrates class *Date* capabilities.

class Date
{
    protected int $day;
    protected int $month;
    protected int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function displayDate()
    {
        echo $this->day . '/';
        echo $this->month . '/';
        echo $this->year;
    }
}

class DateTest
{
    protected object $date;

    public function __construct()
    {

        $this->date = new Date(03, 04, 1991);

        echo 'New Date:';
        echo $this->date->displayDate() . PHP_EOL;

        echo 'Getter Day:' . $this->date->getDay() . PHP_EOL;
        echo 'Getter Month:' . $this->date->getMonth() . PHP_EOL;
        echo 'Getter Year:' . $this->date->getYear() . PHP_EOL;

        $this->date->setDay(04);
        $this->date->setMonth(05);
        $this->date->setYear(1992);

        echo PHP_EOL;

        echo 'Date After Setters:';
        echo $this->date->displayDate() . PHP_EOL;

        echo 'Getter Day:' . $this->date->getDay() . PHP_EOL;
        echo 'Getter Month:' . $this->date->getMonth() . PHP_EOL;
        echo 'Getter Year:' . $this->date->getYear() . PHP_EOL;

    }
}

new DateTest();


