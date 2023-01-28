<?php

namespace App\Patterns\Creational\AbstractFactory;

class JsonWriter implements Writer
{
    public function write()
    {
        echo "Write JSON file \n";
    }
}
