<?php

namespace App\Patterns\Creational\AbstractFactory;

abstract class Logistics
{
    public function planDelevery(): string
    {
        $plan[] = "Доставим";
        $plan[] = $this->getMethodDeleviry();
        $plan[] = $this->createTransport()->deliver();
        return implode(' ', $plan);
    }

    abstract public function getMethodDeleviry(): string;

    abstract public function createTransport(): Transport;
}
