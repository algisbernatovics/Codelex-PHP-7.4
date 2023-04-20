<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

$limit = '100';
$RESOURCE_ID = '25e80bf3-f107-4ab4-89ef-251b5b9374e9&limit=';
$searchPhrase = 'INDEL';

$app = new \App\App($limit, $RESOURCE_ID, $searchPhrase);


foreach ($app->GetRecords() as $key => $record) {
    echo PHP_EOL;
    echo 'Key       :' . $key . PHP_EOL;
    echo 'Name      :' . $record->GetName() . PHP_EOL;
    echo 'RegCode   :' . $record->GetRegCode() . PHP_EOL;
    echo 'Sepa      :' . $record->GetSepa() . PHP_EOL;
    echo 'Reg.Date  :' . $record->GetRegDate() . PHP_EOL;
    echo 'Terminated:';

    echo ($record->GetTerminated()) ? 'No' : 'Yes' . PHP_EOL;
    echo PHP_EOL;
    echo '**********************************************************************';
    echo PHP_EOL;
}







