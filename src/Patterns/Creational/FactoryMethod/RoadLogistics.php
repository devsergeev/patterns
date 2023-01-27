<?php

namespace App\Patterns\Creational\FactoryMethod;

class RoadLogistics extends Logistics
{
    public function getMethodDeleviry(): string
    {
        return "по суше";
    }

    public function createTransport(): Transport
    {
        return new Truck();
    }
}
