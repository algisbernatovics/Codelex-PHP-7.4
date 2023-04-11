<?php

//The questions in this exercise all deal with a class Dog that you have to program from scratch.
//
//- Create a class Dog. Dogs should have a name, and a sex.
//- Make a class DogTest with a Main method in which you create the following Dogs:
//    - Max, male
//- Rocky, male
//- Sparky, male
//- Buster, male
//- Sam, male
//- Lady, female
//- Molly, female
//- Coco, female
//- Change the Dog class so that each dog has a mother and a father.
//- Add to the main method in DogTest, so that:
//- Max has Lady as mother, and Rocky as father
//- Coco has Molly as mother, and Buster as father
//- Rocky has Molly as mother, and Sam as father
//- Buster has Lady as mother, and Sparky as father
//- Change the dog class to include a method fathersName that return the name of the father.
//  If the father reference is null, return "Unknown". Test in the DogTest main method that it works.
//- referenceToCoco.FathersName() returns the string "Buster"
//- referenceToSparky.FathersName() returns the string "Unknown"
//- Change the dog class to include a method boolean HasSameMotherAs(Dog otherDog).
//  The method should return true on the call
//- referenceToCoco.HasSameMotherAs(referenceToRocky).
//Show that the new method works in the DogTest main method.

class Dog
{
    public string $name;
    protected string $sex;

    protected string $mother;
    protected string $father;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = '';
        $this->father = '';
    }

    public function setMother($mother)
    {
        $this->mother = $mother;
    }

    public function setFather($father)
    {
        $this->father = $father;
    }

    public function getFathersName(): string
    {
        if ($this->father) {
            return $this->father;
        } else {
            return 'Unknown';
        }
    }

    public function getMothersName(): string
    {
        if ($this->mother) {
            return $this->mother;
        } else {
            return 'Unknown';
        }
    }

    public function HasSameMotherAs($otherDog): bool
    {
        $checkresult = false;
        if ($this->mother === $otherDog->mother) {
            $checkresult = true;
        }
        return $checkresult;
    }
}

class DogTest
{
    public function __construct()
    {
        $this->main();
    }

    public function main()
    {
        $max = new dog('Max', 'male');
        $rocky = new dog('Rocky', 'male');
        $sparky = new dog('Sparky', 'male');
        $buster = new dog('Buster', 'male');
        $lady = new dog('Lady', 'female');
        $molly = new dog('Molly', 'female');
        $coco = new dog('Coco', 'female');
        $max->setMother('Lady');
        $max->setFather('Rocky');
        $rocky->setMother('Molly');
        $rocky->setFather('Sam');
        $buster->setMother('Lady');
        $buster->setFather('Sparky');
        $coco->setFather('Buster');
        $coco->setMother('Molly');


        echo "$max->name Father is:" . $max->getFathersName() . PHP_EOL;
        echo "$max->name Mother is:" . $max->getMothersName() . PHP_EOL;
        echo "$coco->name Father is:" . $coco->getFathersName() . PHP_EOL;
        echo "$coco->name Mother is:" . $coco->getMothersName() . PHP_EOL;

        echo "$coco->name has some mother as $rocky->name:";
        if ($coco->HasSameMotherAs($rocky)) {
            echo 'true';
            echo PHP_EOL;
        } else {
            echo 'false';
            echo PHP_EOL;
        }
    }
}

new DogTest();
