<?php

namespace App\Patterns\Creational\AbstractFactory;

interface FileFormatFactory
{
    public function createReader(): Reader;
    public function createWriter(): Writer;
}
