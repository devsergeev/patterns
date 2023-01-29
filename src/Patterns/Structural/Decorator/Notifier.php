<?php

namespace App\Patterns\Structural\Decorator;

class Notifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "EMAIL: $message";
    }
}
