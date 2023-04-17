<?php

namespace App;

class showContent
{
    protected object $res;

    public function __construct($res)
    {
        $this->res = $res;
    }

    public function showIt()
    {
        foreach ($this->res as $item) {
            if (isset($item->total)) {
                echo 'Total Count of Records:' . $item->total . PHP_EOL;
            }
            $counter = 0;
            if (isset($item->records)) {
                foreach ($item->records as $record) {
                    echo 'Result-num_:' . $counter . PHP_EOL;
                    echo 'Name_______:' . $record->name . PHP_EOL;
                    echo 'RegCode____:' . $record->regcode . PHP_EOL;
                    echo 'Sepa_______:' . $record->sepa . PHP_EOL;
                    echo 'Reg-date___:' . $record->registered . PHP_EOL;
                    echo 'Terminated_:' . $record->terminated . PHP_EOL;
                    echo '************************************************************';
                    echo PHP_EOL;
                    $counter++;
                }
            }
        }
    }
}
