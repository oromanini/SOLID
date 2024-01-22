<?php

namespace Curso\Solid\discount;

use Curso\Solid\purchase\Purchase;

class SpecialDiscount implements Discount
{
    public function __construct(
        private readonly Purchase $purchase
    ) {}

    public function calculateDiscount(): float
    {
        $total = $this->purchase->calculateTotal();

        return $total > 1000
            ? $total * 0.08
            : 0;
    }
}