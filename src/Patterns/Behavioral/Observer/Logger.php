<?php

namespace App\Patterns\Behavioral\Observer;

use SplSubject;

class Logger implements \SplObserver
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function update(SplSubject $subject, string $event = null, ?array $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);

        echo "Logger: I've written '$event' entry to the log.\n";
    }
}
