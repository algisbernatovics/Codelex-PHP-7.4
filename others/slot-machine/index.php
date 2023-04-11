<?php

$sizeX = 3;//3
$sizeY = 6;//6
$cash = 500;
$spin = 50;

$slotLines = array();
$gameElements = [
    '|A|' => 2000,
    '|K|' => 1000,
    '|Q|' => 500,
    '|J|' => 250,
    '|L|' => 100
];

function createSlots(array $gameElements, array $slots, int $sizeX, int $sizeY): array
{
    for ($i = 0; $i < $sizeX * $sizeY; $i++) {
        array_push($slots, array_rand($gameElements, 1));
    }
    return $slots;
}

function echoSlots(array $slots, int $sizeY)
{
    $counter = 0;
    foreach ($slots as $symbol) {
        echo "$symbol";
        $counter++;
        if ($counter % $sizeY !== 0) {
            echo '-';
        }
        if ($counter % $sizeY === 0) {
            echo PHP_EOL;
        }
    }
    echo PHP_EOL;
}

function findLines(array $slotLines, int &$cash, array $gameElements, int $spin)
{
    for ($i = 0; $i < count($slotLines); $i++) {
        if (count(array_unique($slotLines[$i])) == 1) {
            echo $slotLines[$i][0] . 'Line!+$:' . $gameElements[$slotLines[$i][0]] . PHP_EOL;
            $cash += $gameElements[$slotLines[$i][0]];
        }
    }
    $cash -= $spin;
    echo 'Cash  $:' . $cash . PHP_EOL;
    readline('Press "Enter" to spin.');
}

do {
    echo PHP_EOL;
    $slots = array();
    $slots = createSlots($gameElements, $slots, $sizeX, $sizeY);
    findLines($slotLines, $cash, $gameElements, $spin);
    echoSlots($slots, $sizeY);
    echo "Spin -$:" . $spin;

    $slotLines = [
        //Rows
        [$slots[0], $slots[1], $slots[2], $slots[3], $slots[4], $slots[5]],
        [$slots[6], $slots[7], $slots[8], $slots[9], $slots[10], $slots[11]],
        [$slots[12], $slots[13], $slots[14], $slots[15], $slots[16], $slots[17]],
        //Columns
        [$slots[0], $slots[6], $slots[12]],
        [$slots[1], $slots[7], $slots[13]],
        [$slots[2], $slots[8], $slots[14]],
        [$slots[3], $slots[9], $slots[15]],
        [$slots[4], $slots[10], $slots[16]],
        [$slots[5], $slots[11], $slots[17]],
    ];

} while ($cash > $spin);
