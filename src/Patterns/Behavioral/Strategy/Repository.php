<?php

namespace App\Patterns\Behavioral\Strategy;

interface Repository
{
    public function getById(string $id): Product;
}
