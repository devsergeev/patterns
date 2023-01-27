<?php

namespace App\Patterns\Creational\AbstractFactory;

class Truck implements Transport
{
    public function deliver(): string
    {
        return "на грузовике";
    }
}
