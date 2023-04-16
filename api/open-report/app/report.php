<?php

namespace App;

use GuzzleHttp\Client;

class report
{

    protected object $response;
    protected string $searchPhrase;

    public function __construct($searchPhrase)
    {
        $this->searchPhrase = $searchPhrase;
        $this->createReport();
    }

    public function createReport()
    {
        $client = new Client(['base_uri' => 'https://data.gov.lv/dati/lv/api/3/action/']);
        try {
            $this->response = $client->request('GET', "datastore_search?q=$this->searchPhrase&resource_id=ef249dca-dee5-4b4b-8ae1-3adb9c140387");
        } catch
        (\GuzzleHttp\Exception\GuzzleException $e) {
        }
    }

    public function getBody()
    {
        return $this->response->getBody();
    }
}


