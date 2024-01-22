<?php

namespace Curso\Solid\Tests;

use Curso\Solid\purchase\Product;
use Curso\Solid\purchase\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testShoppingCart(): void
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->addProduct(new Product(100));
        $shoppingCart->addProduct(new Product(200));

        $this->assertEquals(
            expected: 15,
            actual: $shoppingCart->calculateTotalDiscount()
        );
    }
}