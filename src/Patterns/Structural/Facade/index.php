<?php

namespace App\Patterns\Structural\Facade;

require __DIR__ . '/../../../../vendor/autoload.php';


function getOrderInfoById(int $orderId): string {
    return "Заказ №$orderId на сумму 564 451 рубль 56 копеек";
}

$clientCode = static function (WordDocumentService $wordDocumentService, int $orderId, string $fileName) {
    $orderInfo = getOrderInfoById($orderId);
    $wordDocumentService->save($orderInfo, $fileName);
};

$facade = new WordDocumentService();
$clientCode($facade, 365,  'Отчет ' . date('Y-m-d H:i:s'));
