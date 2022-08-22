<?php

declare(strict_types=1);

namespace App\Patterns\Creational\Singleton;

use Exception;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Создавать через new запрещаем
     */
    private function __construct()
    {
    }

    /**
     * Клонировать запрещаем
     */
    private function __clone()
    {
    }

    /**
     * Дессериализацию запрещаем
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Невозможно десериализовать синглтон");
    }
}
