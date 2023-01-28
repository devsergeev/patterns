<?php

namespace App\Patterns\Creational\Builder;

class HtmlBuilder extends AbstractDocumentBuilder
{
    public function addTitle(string $text, int $level): self
    {
        $this->document->addPart("<h$level>$text</h$level>");
        return $this;
    }

    public function addParagraph(string $text): self
    {
        $this->document->addPart("<p>$text</p>");
        return $this;
    }

    public function addList(array $list): self
    {
        $this->document->addPart("<ul>");
        foreach ($list as $listItem) {
            $this->document->addPart("<li>$listItem</li>");
        }
        $this->document->addPart("</ul>");
        return $this;
    }
}
