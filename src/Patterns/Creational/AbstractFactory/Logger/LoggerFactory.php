<?php

namespace App\Patterns\Creational\AbstractFactory\Logger;

use Exception;

class LoggerFactory
{
    public static function createLogger(string $class, array $params): LoggerInterface
    {
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
