<?php

namespace Curso\Solid;

class Purchase {
    private array $items = [];

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

    public function showDetails(): array
    {
        return [
            'items' => $this->items,
            'total' => $this->calculateTotal()
        ];
    }
}