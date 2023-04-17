<?php

namespace App;

use JsonMachine\Items;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\StreamWrapper;

class request
{
    protected string $resId;
    protected string $searchPhrase;
    protected object $response;
    protected object $res;

    public function __construct($searchPhrase, $resId)
    {
        $this->resId = $resId;
        $this->searchPhrase = $searchPhrase;

        $client = new Client(['base_uri' => 'https://data.gov.lv/dati/lv/api/3/action/']);
        try {
            $this->response = $client->
            request('GET', "datastore_search?q=$this->searchPhrase&resource_id=$this->resId");
        } catch
        (GuzzleException $e) {
        }
        $phpStream = StreamWrapper::getResource($this->response->getBody());
        $this->res = Items::fromStream($phpStream);
    }

    public function getRes()
    {
        return ($this->res);
    }
}


