<?php

namespace App\Patterns\Creational\AbstractFactory\Logger;

use Exception;

class LoggerFactory
{
    /**
     * @throws Exception
     */
    public static function createLogger(array $config): LoggerInterface
    {
        $loggerConfig = new LoggerConfig($config);

        $class = $loggerConfig->getClass();
        $params = $loggerConfig->getParams();

        switch ($class) {

            case FileLogger::class:
                if (empty($params['filePath'])) {
                    throw new Exception('Не указан файл лога');
                }
                return new FileLogger($params['filePath']);

            case StdoutLogger::class:
                return new StdoutLogger();

            default:
                throw new Exception('Неизвестный тип логгера');

        }
    }
}
