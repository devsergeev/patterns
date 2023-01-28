<?php

namespace App\Patterns\Creational\AbstractFactory;

class JsonFileFormatFactory implements FileFormatFactory
{
    public function createReader(): Reader
    {
        return new JsonReader();
    }

    public function createWriter(): Writer
    {
        return new JsonWriter();
    }
}
