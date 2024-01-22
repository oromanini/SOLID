<?php

namespace Curso\Solid\purchase;

class Purchase {
    private array $items = [];

    public function items(): array
    {
        return $this->items;
    }

    public function addItem(PurchaseItem $item): void
    {
        $this->items[] = $item;
    }

    public function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->value();
        }
        return $total;
    }
}