<?php

namespace App\Patterns\Creational\AbstractFactory3;

class Ship implements Transport
{
    public function deliver(): string
    {
        return "на лодке";
    }
}
