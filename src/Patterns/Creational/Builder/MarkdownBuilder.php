<?php

namespace App\Patterns\Creational\Builder;

class MarkdownBuilder extends AbstractDocumentBuilder
{

    public function addTitle(string $text, int $level): DocumentBuilder
    {
        $markdown = str_repeat('#', $level);
        $this->document->addPart("$markdown $text\n");
        return $this;
    }

    public function addParagraph(string $text): DocumentBuilder
    {
        $this->document->addPart("$text  \n");
        return $this;
    }

    public function addList(array $list): DocumentBuilder
    {
        foreach ($list as $listItem) {
            $this->document->addPart("- $listItem \n");
        }
        $this->document->addPart("\n");
        return $this;
    }
}
