<?php

namespace App\Patterns\Creational\AbstractFactory2\Client;

enum LoggerType: string
{
    case File = 'file';
    case Stdout = 'stdout';
}
