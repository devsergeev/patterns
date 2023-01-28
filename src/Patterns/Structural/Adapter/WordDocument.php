<?php

namespace App\Patterns\Structural\Adapter;

class WordDocument implements Document
{
    private vendor\WordDocument $vendorWordDocument;

    public function __construct(vendor\WordDocument $vendorWordDocument)
    {
        $this->vendorWordDocument = $vendorWordDocument;
    }

    public function getContent(): string
    {
        return $this->vendorWordDocument->getStringContent();
    }
}
