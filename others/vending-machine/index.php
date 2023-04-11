<?php
$vendingMachineWallet = [5, 5, 5, 100, 10, 10, 10, 10, 20, 5, 5, 5, 5, 20, 50, 50, 50, 100, 200];
$supportedCoins = [5, 10, 20, 50, 100, 200];
$personWallet = 0;
function createProducts(string $title, int $price): stdClass
{
    $product = new stdClass();
    $product->title = $title;
    $product->price = $price;
    return $product;
}

$products = [
    1 => createProducts('Coffe(L)', $price = 190),
    2 => createProducts('Coffe(XL)', $price = 280),
    3 => createProducts('Hot Chocolate', 175),
    4 => createProducts('Tea', $price = 145)

];
for ($i = 1; $i <= count($products); $i++) {
    echo $i . ':' . $products[$i]->title . ':' . $products[$i]->price / 100 . '$' . PHP_EOL;
}
$selectedProduct = readline('Select Product by Number:');
echo 'Your Choice:' . $products[$selectedProduct]->title . ':' . $products[$selectedProduct]->price / 100 . '¢' . PHP_EOL . PHP_EOL;
do {
    do {
        echo 'Supported Coins:' . PHP_EOL;
        foreach ($supportedCoins as $coin) {
            echo $coin . ',';
        }
        echo PHP_EOL;
        $coin = intval(readline('Insert Coins:'));
    } while (!in_array($coin, $supportedCoins));
    $personWallet += $coin;
    echo PHP_EOL;
    array_push($vendingMachineWallet, $coin);
    echo 'Price:$' . $products[$selectedProduct]->price / 100 . PHP_EOL;
    echo 'Wallet:$' . number_format($personWallet / 100, 2) . PHP_EOL;
    if ($personWallet >= $products[$selectedProduct]->price) {
        $personWallet -= $products[$selectedProduct]->price;
        echo 'Vending machine need to give back:$' . number_format($personWallet / 100, 2) . PHP_EOL;
        rsort($vendingMachineWallet);
        do {
            foreach ($vendingMachineWallet as $key => $coin) {
                if ($personWallet >= $coin) {
                    echo 'Vending machine give:$' . number_format($coin / 100, 2) . PHP_EOL;
                    $personWallet -= $coin;
                    unset($vendingMachineWallet[$key]);
                }
            }
        } while ($personWallet !== 0);
    }
} while ($personWallet !== 0);
