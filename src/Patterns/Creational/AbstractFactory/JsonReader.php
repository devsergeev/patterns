<?php

namespace App\Patterns\Creational\AbstractFactory;

class JsonReader implements Reader
{
    public function read()
    {
        echo "Read JSON file \n";
    }
}
