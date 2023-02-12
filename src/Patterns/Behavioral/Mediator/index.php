<?php

namespace App\Patterns\Behavioral\Mediator;

require __DIR__ . '/../../../../vendor/autoload.php';

$orderButton = new OrderButton();
$agreementCheckbox = new AgreementCheckbox;
new Form($orderButton, $agreementCheckbox);

$orderButton->click();
echo "===" . PHP_EOL;

$agreementCheckbox->check();
$orderButton->click();
echo "===" . PHP_EOL;

$agreementCheckbox->uncheck();
$orderButton->click();
echo "===" . PHP_EOL;
