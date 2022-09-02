<?php

namespace App\Patterns\Creational\AbstractFactory\Logger;

use Exception;

class LoggerConfig
{
    private string $class;
    private array $params;

    /**
     * @throws Exception
     */
    public function __construct(array $config)
    {
        $config = $this->guardAndNormalize($config);
        [$this->class, $this->params] = $config;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @throws Exception
     */
    public function guardAndNormalize(array $config): array
    {
        if (empty($config['logger'])) {
            throw new Exception('Не настроен логгер');
        }

        $configLogger = $config['logger'];

        if (empty($configLogger[0]) || !is_string($configLogger[0])) {
            throw new Exception('Не настроен тип логгера');
        }

        if (empty($configLogger[1]) || !is_array($configLogger[1])) {
            $configLogger[1] = [];
        }

        return $configLogger;
    }
}
