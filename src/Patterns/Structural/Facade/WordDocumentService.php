<?php

namespace App\Patterns\Structural\Facade;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;

class WordDocumentService
{
    public function save(string $text, string $fileName) {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        // Adding Text element to the Section having font styled by default...
        $section->addText($text);

        /*
         * Note: it's possible to customize font style of the Text element you add in three ways:
         * - inline;
         * - using named font style (new font style object will be implicitly created);
         * - using explicitly created font style object.
         */

        // Adding Text element with font customized inline...
        $section->addText(
            $text,
            array('name' => 'Tahoma', 'size' => 10)
        );

        // Adding Text element with font customized using named font style...
        $fontStyleName = 'oneUserDefinedStyle';
        $phpWord->addFontStyle(
            $fontStyleName,
            array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
        );
        $section->addText(
            $text,
            $fontStyleName
        );

        // Adding Text element with font customized using explicitly created font style object...
        $fontStyle = new Font();
        $fontStyle->setBold(true);
        $fontStyle->setName('Tahoma');
        $fontStyle->setSize(13);
        $myTextElement = $section->addText($text);
        $myTextElement->setFontStyle($fontStyle);

        $fileName = __DIR__ . "/$fileName.html";

        // Saving the document as OOXML file...
//        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//        $objWriter->save($fileName);

        // Saving the document as ODF file...
//        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
//        $objWriter->save($fileName);

        // Saving the document as HTML file...
        $objWriter = IOFactory::createWriter($phpWord, 'HTML');
        $objWriter->save($fileName);
    }
}
