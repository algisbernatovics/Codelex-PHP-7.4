<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

$limit = '500';
$RESOURCE_ID = '25e80bf3-f107-4ab4-89ef-251b5b9374e9&limit=' . $limit;
$searchPhrase = '';

$response = new App\request($searchPhrase, $RESOURCE_ID);
$content = new \App\showContent($response->getRes());
$content->showIt();
