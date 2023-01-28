<?php

namespace App\Patterns\Creational\AbstractFactory;

class CsvWriter implements Writer
{
    public function write()
    {
        echo "Write CSV file \n";
    }
}