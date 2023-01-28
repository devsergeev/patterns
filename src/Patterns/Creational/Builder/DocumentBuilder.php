<?php

namespace App\Patterns\Creational\Builder;

interface DocumentBuilder
{
    public function addTitle(string $text, int $level): self;
    public function addParagraph(string $text): self;
    public function addList(array $list): self;
    public function getDocument(): Document;
}
