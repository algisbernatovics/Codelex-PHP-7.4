<?php declare(strict_types=1);

namespace App;

use App\Models\GetClientRecords;
use App\Models\GetData;

class App
{
    private array $records;
    private string $limit;
    private string $RESOURCE_ID;
    private string $searchPhrase;
    private object $content;
    private object $response;

    public function __construct(string $limit, string $RESOURCE_ID, string $searchPhrase)
    {
        $this->limit = $limit;
        $this->RESOURCE_ID = $RESOURCE_ID;
        $this->searchPhrase = $searchPhrase;

        $this->response = new Request($this->searchPhrase, $this->RESOURCE_ID . $this->limit);
        $this->content = new GetClientRecords($this->response->getRes());
        $this->records = $this->content->Record();

    }

    public function GetRecords(): array
    {
        return $this->records;
    }

}