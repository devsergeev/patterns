<?php

namespace App\Patterns\Behavioral\Mediator;

class OrderButton extends AbstractComponent
{
    public const CLICK = 'click';

    private bool $isDisabled;

    public function disable()
    {
        $this->isDisabled = true;
    }

    public function enable()
    {
        $this->isDisabled = false;
    }

    public function isDisabled(): bool
    {
        return $this->isDisabled;
    }

    public function click(): void
    {
        $this->mediator->notify($this, self::CLICK);
    }
}
