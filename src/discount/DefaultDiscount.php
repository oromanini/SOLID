<?php

namespace Curso\Solid\discount;

use Curso\Solid\purchase\Purchase;

class DefaultDiscount implements Discount
{
    public function __construct(
        private readonly Purchase $purchase,
        private readonly float $discount
    ) {}

    public function calculateDiscount(): float
    {
        return $this->discount <= 0.06
            ? $this->purchase->calculateTotal() * $this->discount
            : 0;
    }
}