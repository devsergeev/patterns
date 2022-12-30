<?php

namespace App\Patterns\Creational\AbstractFactory2;

use App\Patterns\Creational\AbstractFactory2\Client\FileLoggerFactory;
use App\Patterns\Creational\AbstractFactory2\Client\LoggerType;
use App\Patterns\Creational\AbstractFactory2\Client\StdoutLoggerFactory;

require __DIR__ . '/../../../../vendor/autoload.php';

$loggerType = LoggerType::from('stdout');

$loggerFactory = match ($loggerType) {
    LoggerType::File => new FileLoggerFactory(__DIR__ . '/log.txt'),
    LoggerType::Stdout => new StdoutLoggerFactory(),
};

// Клиент сам может добавить любую реализацию не затрагивая библиотеку. Такой же момент есть и в абстрактной фабрике
$app = new Application($loggerFactory);
$app->run();
