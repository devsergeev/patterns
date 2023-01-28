<?php

namespace App\Patterns\Behavioral\Strategy;

require __DIR__ . '/../../../../vendor/autoload.php';

// Придумал такой пример в котором с одной стороны используется паттерн "Стратегия", но с другой стороны
// с этим можно поспорить, т.к. в интерфейсе Repository могут добавиться другие методы (например findAll и т.п.)
// можно ли в этом случае считать, что применен паттерн стратегия?

$repository = new FileRepository();
$service = new Service($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;

echo '=== === ===';
echo PHP_EOL;

$repository = new DBRepository();
$service = new Service($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;

echo '=== === ===';
echo PHP_EOL;


$repository = new MemoryRepository();
$product = new Product('uid45-455-455', 'IN MEMORY');
$repository->addProduct($product);
$service = new Service($repository);
echo $service->getProductName('uid45-455-455');
echo PHP_EOL;
