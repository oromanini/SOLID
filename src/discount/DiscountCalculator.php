<?php

namespace Curso\Solid\discount;

use Curso\Solid\purchase\Purchase;

class DiscountCalculator
{
    public function __construct(
        private readonly Purchase $purchase,
        private readonly float $discount
    ) {}

    public function calculateDiscount(): float
    {
        return $this->purchase->calculateTotal() * $this->discount;
    }
}