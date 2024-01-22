<?php

namespace Curso\Solid\Tests;

use Curso\Solid\discount\DefaultDiscount;
use Curso\Solid\discount\DiscountCalculator;
use Curso\Solid\discount\SpecialDiscount;
use Curso\Solid\purchase\Purchase;
use Curso\Solid\purchase\PurchaseItem;
use PHPUnit\Framework\TestCase;

class DiscountTest extends TestCase
{
    public function testDiscount(): void
    {
        $purchase = new Purchase();

        $item1 = new PurchaseItem(50);
        $item2 = new PurchaseItem(50);
        $purchase->addItem($item1);
        $purchase->addItem($item2);

        $defaultDiscount = new DefaultDiscount($purchase, 0.05);
        $discountCalculator = new DiscountCalculator($defaultDiscount);
        $this->assertEquals(5, $discountCalculator->calculateDiscount());

        $item2 = new PurchaseItem(1000);
        $purchase->addItem($item2);

        $specialDiscount = new SpecialDiscount($purchase);
        $discountCalculator = new DiscountCalculator($specialDiscount);
        $this->assertEquals(88, $discountCalculator->calculateDiscount());
    }
}