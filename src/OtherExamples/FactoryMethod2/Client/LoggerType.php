<?php

namespace App\OtherExamples\AbstractFactory2\Client;

enum LoggerType: string
{
    case File = 'file';
    case Stdout = 'stdout';
}
