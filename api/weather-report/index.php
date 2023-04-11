<?php include 'functions.php';

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

$choice = digits(readline('Enter favourite City By number:'));

while (!$choice == 0 && $choice >= count($cities)) {
    $choice = digits(readline('Enter correct city by number:'));
};

$city = $cities[$choice];
$apikey = '9b023939292af51079afe14264490ab6';

$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apikey");
$weatherArray = json_decode($urlContents, true);

echo PHP_EOL;
echo 'The weather in ' . $weatherArray['name'] . ' is currently ' . $weatherArray['weather'][0]['description'] . '·';
echo PHP_EOL;
echo 'The temperature in ' . $weatherArray['name'] . ' is ' . intval($weatherArray['main']['temp'] - 273) . 'C';
echo PHP_EOL;
echo 'and the wind speed is ' . $weatherArray['wind']['speed'] . " m/s.";
echo PHP_EOL;
echo PHP_EOL;