<?php

namespace App\Patterns\Behavioral\Mediator;

class AgreementCheckbox extends AbstractComponent
{
    public const CHECK = 'check';
    public const UNCHECK = 'check';
    private bool $isChecked = false;

    public function check()
    {
        $this->isChecked = true;
        $this->mediator->notify($this, self::CHECK);
    }

    public function uncheck()
    {
        $this->isChecked = false;
        $this->mediator->notify($this, self::UNCHECK);
    }

    public function isChecked(): bool
    {
        return $this->isChecked;
    }
}
