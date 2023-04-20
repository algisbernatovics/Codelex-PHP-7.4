<?php

namespace App\Models;

class GetClientRecords
{
    protected object $res;
    protected array $records;

    public function __construct(object $res)
    {
        $this->res = $res;
        $this->records = [];
    }

    public function Record(): array
    {
        foreach ($this->res as $item) {
            if (isset($item->total)) {
                echo 'Total Count of Records:' . $item->total . PHP_EOL;
            }
            if (isset($item->records)) {
                foreach ($item->records as $record) {
                    $this->records[] = new \App\Record(
                        $record->name,
                        $record->regcode,
                        $record->sepa,
                        $record->registered,
                        $record->terminated
                    );
                }
            }
        }
        return $this->records;
    }
}
