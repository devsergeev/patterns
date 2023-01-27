<?php

namespace App\Patterns\Creational\FactoryMethod;

class SeaLogistics extends Logistics
{
    public function getMethodDeleviry(): string
    {
        return "по воде";
    }

    public function createTransport(): Transport
    {
        return new Ship();
    }
}
