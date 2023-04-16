<?php

require_once 'vendor/autoload.php';

use App\report;

//require_once 'app/report.php';
//$search = (int)(readline('Search For:'));

$search = 'S80';

$reportObj = new report($search);
$reportArr = (json_decode($reportObj->getBody(), true));

for ($i = 0; $i < count($reportArr["result"]["records"]); $i++) {
    echo PHP_EOL . PHP_EOL . 'Number:' . $i . PHP_EOL;
    foreach ($reportArr["result"]["records"][$i] as $key => $value) {

        echo $key . ':' . ':' . $value . PHP_EOL;
    }

}




