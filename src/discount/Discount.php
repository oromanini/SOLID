<?php

namespace Curso\Solid\discount;

interface Discount
{
    public function calculateDiscount(): float;
}