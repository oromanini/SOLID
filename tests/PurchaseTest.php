<?php

namespace Curso\Solid\Tests;

use Curso\Solid\purchase\Purchase;
use Curso\Solid\purchase\PurchaseDetail;
use Curso\Solid\purchase\PurchaseItem;
use PHPUnit\Framework\TestCase;

class PurchaseTest extends TestCase
{
    public function testPurchase(): void
    {
        $purchase = new Purchase();

        $item1 = new PurchaseItem(100);
        $item2 = new PurchaseItem(50);
        $purchase->addItem($item1);
        $purchase->addItem($item2);

        $purchaseDetails = (new PurchaseDetail($purchase))->showDetails();

        $this->assertEquals(150, $purchase->calculateTotal());
        $this->assertArrayHasKey('items', $purchaseDetails);
        $this->assertArrayHasKey('total', $purchaseDetails);
    }
}