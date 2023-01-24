<?php

namespace App\Patterns\Behavioral\Strategy;

class FileRepository implements Repository
{
    // тут неокторый нонструктор, принимающий необходимые данные - путь к папке и т.п.

    public function getById(string $id): Product
    {
        // лезу в некоторую папку, и ищу файл с названием $id, читаю данные из файла
        // если в файле данные могут храниться в разных форматах, то можно вновь воспользоваться паттерном (JSON, CVS)
        return new Product($id, __CLASS__);
    }
}
