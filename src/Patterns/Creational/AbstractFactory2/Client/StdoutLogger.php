<?php

namespace App\Patterns\Creational\AbstractFactory2\Client;

use App\Patterns\Creational\AbstractFactory2\Logger\LoggerInterface;

class StdoutLogger implements LoggerInterface
{
    public function log(string $message)
    {
        $log = date('Y-m-d H:i:s') . " $message" . PHP_EOL;
        file_put_contents('php://stdout',$log);
    }
}
