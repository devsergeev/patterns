<?php

namespace App\Patterns\Creational\AbstractFactory3;

require __DIR__ . '/../../../../vendor/autoload.php';

$logistics = new SeaLogistics();
echo $logistics->planDelevery();
echo PHP_EOL;
