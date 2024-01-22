<?php

namespace Curso\Solid\purchase;

use Curso\Solid\discount\CalculableDiscount;

class ShoppingCart
{
    private array $items = [];

    public function addProduct(CalculableDiscount $product): void
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