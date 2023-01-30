<?php

namespace App\Patterns\Behavioral\Strategy;

require __DIR__ . '/../../../../vendor/autoload.php';

$service = new Service();

$repository = new FileRepository();
$service->setStrategy($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;

$repository = new DBRepository();
$service->setStrategy($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;

$repository = new MemoryRepository();
$product = new Product('uid45-455-455', 'IN MEMORY');
$repository->addProduct($product);
$service->setStrategy($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;
