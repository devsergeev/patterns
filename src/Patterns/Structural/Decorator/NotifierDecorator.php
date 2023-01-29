<?php

namespace App\Patterns\Structural\Decorator;

class NotifierDecorator implements NotifierInterface
{
    private Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send(string $message): void
    {
        $this->notifier->send($message);
    }
}
