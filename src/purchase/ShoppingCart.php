<?php

namespace Curso\Solid\purchase;

class ShoppingCart
{
    private array $items = [];

    public function addProduct(Product $product): void
    {
        $this->items[] = $product;
    }

    public function calculateTotalDiscount():float
    {
        return array_reduce(
            array: $this->items,
            callback: fn(float $total, Product $product) =>
                $total + $product->calculateDiscount(),
            initial: 0
        );
    }
}