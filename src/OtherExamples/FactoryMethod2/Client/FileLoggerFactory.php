<?php

namespace App\OtherExamples\AbstractFactory2\Client;

use App\OtherExamples\AbstractFactory2\Logger\LoggerFactoryInterface;
use App\OtherExamples\AbstractFactory2\Logger\LoggerInterface;

class FileLoggerFactory implements LoggerFactoryInterface
{
    private string $filepath;

    public function __construct(string $filePath)
    {
        $this->filepath = $filePath;
    }

    public function create(): LoggerInterface
    {
        return new FileLogger($this->filepath);
    }
}
