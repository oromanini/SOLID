<?php

namespace Curso\Solid\purchase;

class PurchaseItem
{
    public function __construct(private readonly float $value)
    {}

    public function value(): float
    {
        return $this->value;
    }
}