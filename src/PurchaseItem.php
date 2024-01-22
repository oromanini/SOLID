<?php

namespace Curso\Solid;

class PurchaseItem
{
    public function __construct(private readonly float $value)
    {}

    public function value(): float
    {
        return $this->value;
    }
}