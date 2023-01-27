<?php

namespace App\Patterns\Creational\FactoryMethod;

class Ship implements Transport
{
    public function deliver(): string
    {
        return "на лодке";
    }
}
