<?php

namespace App\Patterns\Creational\AbstractFactory;

require __DIR__ . '/../../../../vendor/autoload.php';

$logistics = new SeaLogistics();
echo $logistics->planDelevery();
echo PHP_EOL;

$logistics = new RoadLogistics();
echo $logistics->planDelevery();
echo PHP_EOL;
