<?php

namespace App\Patterns\Structural\Adapter;

class TxtDocument implements Document
{

    public function getContent(): string
    {
        return "TXT Document";
    }
}
