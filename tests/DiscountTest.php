<?php

namespace Curso\Solid\Tests;

use Curso\Solid\discount\DiscountCalculator;
use Curso\Solid\purchase\Purchase;
use Curso\Solid\purchase\PurchaseItem;
use PHPUnit\Framework\TestCase;

class DiscountTest extends TestCase
{
    public function testDiscount(): void
    {
        $purchase = new Purchase();

        $item1 = new PurchaseItem(100);
        $item2 = new PurchaseItem(50);
        $purchase->addItem($item1);
        $purchase->addItem($item2);

        $discountCalculator = new DiscountCalculator($purchase, 0.1);

        $this->assertEquals(15, $discountCalculator->calculateDiscount());
    }
}