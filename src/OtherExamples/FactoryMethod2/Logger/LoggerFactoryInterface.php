<?php

namespace App\OtherExamples\AbstractFactory2\Logger;

use Exception;

interface LoggerFactoryInterface
{
    public function create(): LoggerInterface;
}
