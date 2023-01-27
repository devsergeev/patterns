<?php

namespace App\OtherExamples\AbstractFactory2\Client;

use App\OtherExamples\AbstractFactory2\Logger\LoggerFactoryInterface;
use App\OtherExamples\AbstractFactory2\Logger\LoggerInterface;

class StdoutLoggerFactory implements LoggerFactoryInterface
{
    public function create(): LoggerInterface
    {
        return new StdoutLogger();
    }
}
