<?php

namespace App\Patterns\Creational\Builder;

abstract class AbstractDocumentBuilder implements DocumentBuilder
{
    protected Document $document;

    public function __construct()
    {
        $this->reset();
    }

    protected function reset()
    {
        $this->document = new Document();
    }

    public function getDocument(): Document
    {
        $document = $this->document;
        $this->reset();
        return $document;
    }
}
