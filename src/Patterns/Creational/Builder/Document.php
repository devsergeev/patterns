<?php

namespace App\Patterns\Creational\Builder;

class Document
{
    private array $parts;

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }

    public function getContent(): string
    {
        return implode($this->parts);
    }
}
