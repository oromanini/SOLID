<?php

namespace Curso\Solid\discount;

interface CalculableDiscount
{
    public function calculateDiscount(): float;
}