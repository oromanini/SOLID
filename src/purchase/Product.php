<?php

namespace Curso\Solid\purchase;

use Curso\Solid\discount\CalculableDiscount;

class Product implements CalculableDiscount
{
    public function __construct(private readonly float $value)
    {}

    public function calculateDiscount(): float
    {
        return $this->value * 0.05;
    }

    public function value(): float
    {
        return $this->value;
    }
}