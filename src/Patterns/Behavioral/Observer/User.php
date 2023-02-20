<?php

namespace App\Patterns\Behavioral\Observer;

class User
{
    public array $attributes = [];

    public function update(array $data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
