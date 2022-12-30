<?php

namespace App\Patterns\Creational\AbstractFactory2\Client;

use App\Patterns\Creational\AbstractFactory2\Logger\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        $log = date('Y-m-d H:i:s') . " $message" . PHP_EOL;
        file_put_contents($this->filePath, $log, FILE_APPEND);
    }
}
