<?php

namespace App\Patterns\Creational\AbstractFactory;

require __DIR__ . '/../../../../vendor/autoload.php';

$clientCode = static function (FileFormatFactory $factory) {
    $reader = $factory->createReader();
    $reader->read();
    $writer = $factory->createWriter();
    $writer->write();
};

$clientCode(new CsvFileFormatFactory());
$clientCode(new JsonFileFormatFactory());
