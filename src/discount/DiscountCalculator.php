<?php

namespace Curso\Solid\discount;

use Curso\Solid\purchase\Purchase;

class DiscountCalculator
{
    public function __construct(private readonly Discount $discount)
    {}

    public function calculateDiscount(): float
    {
        return $this->discount->calculateDiscount();
    }
}