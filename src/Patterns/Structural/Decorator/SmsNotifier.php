<?php

namespace App\Patterns\Structural\Decorator;

class SmsNotifier extends NotifierDecorator
{
    public function send(string $message): void
    {
        parent::send($message);
        echo PHP_EOL;
        echo "SMS: $message";
        echo PHP_EOL;
    }
}
