<?php

namespace App\Patterns\Behavioral\Mediator;

interface Mediator
{
    public function notify(Component $sender, string $event);
}
