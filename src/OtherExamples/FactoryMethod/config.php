<?php

return [
//    'logger' => [
//        App\OtherExamples\FactoryMethod\Logger\FileLogger::class,
//        [
//            'filePath' => __DIR__ . '/log.txt',
//        ],
//    ],
    'logger' => [
        App\OtherExamples\AbstractFactory\Logger\StdoutLogger::class,
    ],
];
