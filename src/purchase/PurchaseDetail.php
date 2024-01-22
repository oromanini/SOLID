<?php

namespace Curso\Solid\Purchase;

class PurchaseDetail
{
    public function __construct(private readonly Purchase $purchase)
    {}

    public function showDetails(): array
    {
        return [
            'items' => $this->purchase->items(),
            'total' => $this->purchase->calculateTotal()
        ];
    }
}