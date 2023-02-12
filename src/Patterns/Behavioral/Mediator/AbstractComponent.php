<?php

namespace App\Patterns\Behavioral\Mediator;

abstract class AbstractComponent implements Component
{
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}
