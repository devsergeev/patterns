<?php

namespace App\Patterns\Creational\AbstractFactory;

class CsvReader implements Reader
{
    public function read()
    {
        echo "Read CSV file \n";
    }
}
