<?php

namespace App\Patterns\Structural\Adapter;

class HTMLDocument implements Document
{

    public function getContent(): string
    {
        return "HTML Document";
    }
}
