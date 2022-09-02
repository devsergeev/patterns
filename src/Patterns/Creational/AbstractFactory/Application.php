<?php

namespace App\Patterns\Creational\AbstractFactory;

use App\Patterns\Creational\AbstractFactory\Logger\LoggerFactory;
use App\Patterns\Creational\AbstractFactory\Logger\LoggerInterface;
use Exception;

class Application
{
    private LoggerInterface $logger;

    public function __construct(array $config)
    {
        try {
            $this->logger = LoggerFactory::createLogger($config);
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
