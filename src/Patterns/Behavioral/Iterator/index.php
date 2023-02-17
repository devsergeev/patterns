<?php

namespace App\Patterns\Iterator\Mediator;

use App\Patterns\Behavioral\Iterator\User;
use App\Patterns\Behavioral\Iterator\UserCollection;

require __DIR__ . '/../../../../vendor/autoload.php';

$userCollection = new UserCollection();
$userCollection->add(new User('Иванов Петр Первый'));
$userCollection->add(new User('Сидоров Иван Второй'));
$userCollection->add(new User('Владимиров Сидр Третий'));
$userCollection->add(new User('Толстой Владимир Четвёртый'));

foreach ($userCollection->getIterator() as $user) {
    echo $user->getName();
    echo PHP_EOL;
}
