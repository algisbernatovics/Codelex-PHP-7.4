<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$valueForSearch = 0;
$searchValue = 0;

echo "Enter the value to search for: ";

$valueForSearch = readline('');
$valueForSearch = preg_replace('/[^0-8]/', "", $valueForSearch, -1);

if (in_array($valueForSearch, $numbers)) {
    echo $valueForSearch . ' Found in Array' . PHP_EOL;
} else {
    echo $valueForSearch . ' Not Found in Array' . PHP_EOL;
}

