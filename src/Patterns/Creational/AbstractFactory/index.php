<?php

namespace App\Patterns\Creational\AbstractFactory;

require __DIR__ . '/../../../../vendor/autoload.php';

$config = require_once __DIR__ . '/config.php';
$app = new Application($config);
$app->run();
