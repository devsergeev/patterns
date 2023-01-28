<?php

namespace App\Patterns\Creational\FactoryMethod;

use App\Patterns\Creational\AbstractFactory\CsvFileFormatFactory;
use App\Patterns\Creational\AbstractFactory\FileFormatFactory;
use App\Patterns\Creational\AbstractFactory\JsonFileFormatFactory;

require __DIR__ . '/../../../../vendor/autoload.php';

$clientCode = static function (FileFormatFactory $factory) {
    $reader = $factory->createReader();
    $reader->read();
    $writer = $factory->createWriter();
    $writer->write();
};

$clientCode(new CsvFileFormatFactory());
$clientCode(new JsonFileFormatFactory());
