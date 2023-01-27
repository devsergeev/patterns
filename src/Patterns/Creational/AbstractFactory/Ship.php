<?php

namespace App\Patterns\Creational\AbstractFactory;

class Ship implements Transport
{
    public function deliver(): string
    {
        return "на лодке";
    }
}
