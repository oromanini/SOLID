<?php

namespace Curso\Solid\purchase;

class Product
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