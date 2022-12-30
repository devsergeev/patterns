<?php

namespace App\Patterns\Creational\AbstractFactory2\Logger;

use Exception;

interface LoggerFactoryInterface
{
    public function create(): LoggerInterface;
}
