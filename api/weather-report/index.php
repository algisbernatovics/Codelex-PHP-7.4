<?php

use GuzzleHttp\Psr7\Request;

require 'vendor/autoload.php';

$cities = ['Riga', 'Jelgava', 'Dobele', 'Berlin'];

echo 'Weather Report.';
echo PHP_EOL;

foreach ($cities as $key => $city) {
    echo PHP_EOL;
    echo $key . '-';
    echo $city;
}
echo PHP_EOL;
echo PHP_EOL;

$choice = (int)(readline('Enter favourite City By number:'));

while (!$choice == 0 && $choice >= count($cities)) {
    $choice = (int)(readline('Enter correct city by number:'));
};

$city = $cities[$choice];
$apikey = '9b023939292af51079afe14264490ab6';

$client = new GuzzleHttp\Client(['base_uri' => 'https://api.openweathermap.org/']);
$request = new Request('GET', "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apikey");
$promise = $client->sendAsync($request)->then(function ($response) {

    $weatherArray = (json_decode($response->getBody(), true));

    echo PHP_EOL;
    echo 'The weather in ' . $weatherArray['name'] . ' is currently ' . $weatherArray['weather'][0]['description'] . '·';
    echo PHP_EOL;
    echo 'The temperature in ' . $weatherArray['name'] . ' is ' . intval($weatherArray['main']['temp'] - 273) . 'C';
    echo PHP_EOL;
    echo 'and the wind speed is ' . $weatherArray['wind']['speed'] . " m/s.";
    echo PHP_EOL;
    
});
$promise->wait();


