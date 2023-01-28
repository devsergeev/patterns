<?php

namespace App\Patterns\Creational\AbstractFactory;

class CsvFileFormatFactory implements FileFormatFactory
{
    public function createReader(): Reader
    {
        return new CsvReader();
    }

    public function createWriter(): Writer
    {
        return new CsvWriter();
    }
}
