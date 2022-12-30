<?php

namespace App\Patterns\Creational\AbstractFactory2;

use App\Patterns\Creational\AbstractFactory2\Logger\LoggerFactoryInterface;
use App\Patterns\Creational\AbstractFactory2\Logger\LoggerInterface;
use Exception;

class Application
{
    private LoggerInterface $logger;

    public function __construct(LoggerFactoryInterface $loggerFactory)
    {
        try {
            $this->logger = $loggerFactory->create();
            $this->log('Приложение инициализированно.');
        } catch (Exception $exception) {
            echo $exception->getMessage();
            echo PHP_EOL;
            die;
        }
    }

    public function run(): void
    {
        $this->log('Приложение запущено.');
    }

    private function log(string $message): void
    {
        $this->logger->log($message);
    }
}
