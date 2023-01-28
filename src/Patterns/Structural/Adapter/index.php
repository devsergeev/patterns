<?php

namespace App\Patterns\Structural\Adapter;

require __DIR__ . '/../../../../vendor/autoload.php';

$clientCode = static function (Document $document) {
    echo $document->getContent();
    echo PHP_EOL;
};

$documents = [
    new HTMLDocument(),
    new TxtDocument(),
    new WordDocument(new \App\Patterns\Structural\Adapter\vendor\WordDocument()),
];

foreach ($documents as $document) {
    $clientCode($document);
}
