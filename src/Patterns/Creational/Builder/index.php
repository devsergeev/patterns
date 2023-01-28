<?php

namespace App\Patterns\Creational\FactoryMethod;

use App\Patterns\Creational\Builder\AbstractDocumentBuilder;
use App\Patterns\Creational\Builder\HtmlBuilder;
use App\Patterns\Creational\Builder\MarkdownBuilder;

require __DIR__ . '/../../../../vendor/autoload.php';

// $clientCode - это можно вынести в Director
$clientCode = static function (AbstractDocumentBuilder $builder) {
    $builder->addTitle('Ученые обнаружили новую планету', 1);
    $builder->addParagraph('Монгольские ученые долго сомтрели в небо и заметили планету, которую раньше никогда не замечали. Было предложено назвать её одним из имен');
    $builder->addList([
        'Новая Земля',
        'Новая Монголия',
        'Фантазия',
    ]);
    $builder->addParagraph('На данный момент лидирует название "Фантазия", т.к. в авторитетных научных кругах уже обсуждается ошибочность открытия.');
    $document = $builder->getDocument();
    return $document->getContent();
};


$documentContent = $clientCode(new HtmlBuilder());
file_put_contents(__DIR__ . '/document.html', $documentContent);

$documentContent = $clientCode(new MarkdownBuilder());
file_put_contents(__DIR__ . '/document.md', $documentContent);

echo "Смотри файлы в корне проекта";
echo PHP_EOL;
