<?php

namespace App\OtherExamples\AbstractFactory\Logger;

class StdoutLogger implements LoggerInterface
{
    public function log(string $message)
    {
        $log = date('Y-m-d H:i:s') . " $message" . PHP_EOL;
        file_put_contents('php://stdout',$log);
    }
}
