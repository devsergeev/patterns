<?php

namespace App\Patterns\Behavioral\Strategy;

class DBRepository implements Repository
{
    // тут неокторый нонструктор, принимающий необходимые данные для подключения к БД

    public function getById(string $id): Product
    {
        // лезу в некоторую базу данных, ищу запись по $id
        return new Product($id, __CLASS__);
    }
}
