<?php

namespace App\Patterns\Creational\AbstractFactory;

use App\Patterns\Creational\AbstractFactory\Logger\FileLogger;
use App\Patterns\Creational\AbstractFactory\Logger\LoggerInterface;
use App\Patterns\Creational\AbstractFactory\Logger\StdoutLogger;
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
        return $this->createLoggerByConfig($loggerConfig);
    }

    /**
     * @throws Exception
     */
    private function getLoggerCongig(): array
    {
        if (empty($this->config['logger'])) {
            throw new Exception('Не настроен логгер');
        }

        $loggerConfig = $this->config['logger'];

        if (empty($loggerConfig['type'])) {
            throw new Exception('Не настроен тип логгера');
        }

        return $loggerConfig;
    }

    /**
     * @throws Exception
     */
    private function createLoggerByConfig(array $loggerConfig): LoggerInterface
    {
        switch ($loggerConfig['type']) {
            case 'file':
                if (empty($loggerConfig['filePath'])) {
                    throw new Exception('Не указан файл лога');
                }
                return new FileLogger($loggerConfig['filePath']);

            case 'stdout':
                return new StdoutLogger();

            default:
                throw new Exception('Неизвестный тип логгера');
        }
    }
}
