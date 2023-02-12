<?php

namespace App\Patterns\Behavioral\Mediator;

class Form implements Mediator
{
    private OrderButton $button;
    private AgreementCheckbox $checkbox;

    public function __construct(OrderButton $button, AgreementCheckbox $checkbox)
    {
        $this->button = $button;
        $this->button->setMediator($this);

        $this->checkbox = $checkbox;
        $this->checkbox->setMediator($this);
    }

    public function notify(Component $sender, string $event)
    {
        switch ($sender) {
            case $this->button:
                $this->handleButton($event);
                break;
            case $this->checkbox:
                $this->handleChackbox($event);
                break;
        }
    }

    private function handleButton(string $event)
    {
        if ($event == OrderButton::CLICK) {
            if ($this->checkbox->isChecked()) {
                echo 'Заказ отправлен.';
            } else {
                echo 'Необходимо принять соглашение!';
            }
            echo PHP_EOL;
        }
    }

    private function handleChackbox(string $event)
    {
        switch ($event) {
            case AgreementCheckbox::CHECK:
                $this->button->enable();
                break;
            case AgreementCheckbox::UNCHECK:
                $this->button->disable();
                break;
        }
    }
}
