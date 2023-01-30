<?php

namespace App\Patterns\Behavioral\Strategy;

class Service
{
    private Repository $repository;

    public function setStrategy(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getProductName(string $id): string
    {
        $product = $this->repository->getById($id);
        return $product->getName();
    }
}
