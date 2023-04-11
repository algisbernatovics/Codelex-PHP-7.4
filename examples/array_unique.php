<?php

$input = array(
    'b', 'b', 'b',
    'b', 'b', 'a'
);
$slotLine = [
    //Rows
    [$input[0], $input[1], $input[2]],
    [$input[3], $input[4], $input[5]]
];
if (count(array_unique($slotLine[0])) == 1) {
    echo 'Line' . PHP_EOL;
    var_dump(count(array_unique($slotLine[0])));
}
if (count(array_unique($slotLine[1])) == 1) {
    echo 'Line' . PHP_EOL;
    var_dump(count(array_unique($slotLine[1])));
}
$result = array_unique($input);
var_dump($result);
