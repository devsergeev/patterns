<?php

namespace App\Patterns\Behavioral\Strategy;

// клаасс-заглушка для тестов (бытсрых тестов), где не важна проверка реализации хранения,
// а важна проверка бизнесс-логики, которая использует Repository
class MemoryRepository implements Repository
{
    /**
     * @var Product[]
     */
    private array $products = [];

    public function getById(string $id): Product
    {
        return $this->products[$id];
    }

    // перед тестом с помощью этого метода можно заполнить коллекцию продуктов, которые потом будем доставать
    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }
}
