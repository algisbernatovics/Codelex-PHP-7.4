<?php

//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
//Using loop (by your choice) print out every persons personal data.

$persons = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => '01.01.1973'
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "birthday" => '01.02.1978'
        ]
    ]
];

foreach ($persons as $person) {
    foreach ($person as $obj) {
        echo
            "Name:" . $obj['name'] . PHP_EOL .
            "Surname:" . $obj['surname'] . PHP_EOL .
            "Age:" . $obj['age'] . PHP_EOL .
            "Birthday:" . $obj['birthday'] . PHP_EOL . PHP_EOL;
    }
}