<?php

namespace App\Patterns\Creational\AbstractFactory2\Client;

use App\Patterns\Creational\AbstractFactory2\Logger\LoggerFactoryInterface;
use App\Patterns\Creational\AbstractFactory2\Logger\LoggerInterface;

class StdoutLoggerFactory implements LoggerFactoryInterface
{
    public function create(): LoggerInterface
    {
        return new StdoutLogger();
    }
}
