<?php

namespace App\Patterns\Structural\Decorator;

interface NotifierInterface
{
    public function send(string $message): void;
}
