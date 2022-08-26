<?php

namespace App\Patterns\Creational\AbstractFactory;

use Exception;

class Application
{
    private array $config;
    private Logger $logger;

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
    private function createLogger(): Logger
    {
        if (empty($this->config['logger'])) {
            throw new Exception('Не настроен логгер');
        }
        $loggerConfig = $this->config['logger'];
        if (empty($loggerConfig['type'])) {
            throw new Exception('Не настроен тип логгера');
        }

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
