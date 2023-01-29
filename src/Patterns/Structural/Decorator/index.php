<?php

namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Decorator\Notifier;
use App\Patterns\Structural\Decorator\NotifierInterface;
use App\Patterns\Structural\Decorator\SmsNotifier;

require __DIR__ . '/../../../../vendor/autoload.php';

$clientCode = static function (NotifierInterface $notifier, string $message) {
    $notifier->send($message);
};

// было - отправка на email
//$notifier = new Notifier();
//$clientCode($notifier, 'Ваш заказ взят в работу!');

// стало - отправка на email + SMS и д.т.
$notifier = new Notifier();
$notifier = new SmsNotifier($notifier);
$clientCode($notifier, 'Ваш заказ взят в работу!');
