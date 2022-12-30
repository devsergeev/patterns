<?php

namespace App\Patterns\Creational\AbstractFactory3;

class Truck implements Transport
{
    public function deliver(): string
    {
        return "на грузовике";
    }
}
