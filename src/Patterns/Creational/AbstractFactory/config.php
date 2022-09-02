<?php

return [
    'logger' => [
        App\Patterns\Creational\AbstractFactory\Logger\FileLogger::class,
        [
            'filePath' => __DIR__ . '/log.txt',
        ],
    ],
//    'logger' => [
//        App\Patterns\Creational\AbstractFactory\Logger\StdoutLogger::class,
//    ],
];
