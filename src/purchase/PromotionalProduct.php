<?php

namespace Curso\Solid\purchase;

use Curso\Solid\discount\CalculableDiscount;

class PromotionalProduct implements CalculableDiscount
{
    public function __construct(private readonly float $value)
    {}

    public function calculateDiscount(): float
    {
        return $this->value > 100
            ? $this->value * 0.07
            : 0;
    }

    public function value(): float
    {
        return $this->value;
    }
}