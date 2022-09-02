<?php

namespace App\Patterns\Creational\AbstractFactory;

use App\Patterns\Creational\AbstractFactory\Logger\LoggerFactory;
use App\Patterns\Creational\AbstractFactory\Logger\LoggerInterface;
use Exception;

class Application
{
    private array $config;
    private LoggerInterface $logger;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->logger = $this->createLogger();
        $this->log('Приложение инициализированно.');
    }

    public function run()
    {
        $this->log('Приложение запущено.');
    }

    /**
     * @throws Exception
     */
    private function log(string $message): void
    {
        $this->logger->log($message);
    }

    /**
     * @throws Exception
     */
    private function createLogger(): LoggerInterface
    {
        $loggerConfig = $this->getLoggerCongig();
        [$className, $constructorParams] = $loggerConfig;
        return LoggerFactory::createLogger($className, $constructorParams);
    }

    /**
     * @throws Exception
     */
    private function getLoggerCongig(): array
    {
        if (empty($this->config['logger'])) {
            throw new Exception('Не настроен логгер');
        }

        if (empty($this->config['logger'][0])) {
            throw new Exception('Не настроен тип логгера');
        }
        if (empty($this->config['logger'][1])) {
            $this->config['logger'][1] = [];
        }

        return $this->config['logger'];
    }
}
