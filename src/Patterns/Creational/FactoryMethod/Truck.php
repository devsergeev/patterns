<?php

namespace App\Patterns\Creational\FactoryMethod;

class Truck implements Transport
{
    public function deliver(): string
    {
        return "на грузовике";
    }
}
