<?php

namespace App\Patterns\Creational\AbstractFactory;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        $log = date('Y-m-d H:i:s') . " $message" . PHP_EOL;
        file_put_contents('php://stdout',$log);
    }
}
