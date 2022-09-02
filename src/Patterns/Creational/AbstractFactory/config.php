<?php

return [
    'logger' => [
        'type' => App\Patterns\Creational\AbstractFactory\Logger\FileLogger::class,
        'filePath' => __DIR__ . '/log.txt',
    ]
];
