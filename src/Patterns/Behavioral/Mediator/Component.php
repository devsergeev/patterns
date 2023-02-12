<?php

namespace App\Patterns\Behavioral\Mediator;

interface Component
{
    public function setMediator(Mediator $mediator): void;
}
