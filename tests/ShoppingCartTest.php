<?php

use Day1\Exercise2\ShoppingCart;
use Day1\Exercise2\Contracts\ShoppingCartItem;
use Day1\Exercise2\Contracts\Logger;

class ShoppingCartTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ShoppingCart
     */
    private $cart;

    protected function setUp()
    {
        $this->cart = new ShoppingCart();
    }

    public function testIsInitiallyEmpty()
    {
        $this->assertEmpty($this->cart->items());
    }

    public function testInitialTotalShouldBe0()
    {
        $this->assertEquals(0, $this->cart->total());
    }

    public function testAnItemCanBeAdded()
    {
        $item = $this->makeStubShoppingCartItemWithPrice(123);
        $this->cart->addItem($item);

        $this->assertEquals([$item], $this->cart->items());
    }

    public function testLogShouldBeCalledWhileAddingShoppingCartItemToACart()
    {
        $this->cart->attachLogger($this->makeMockLogger());
        $this->cart->addItem($this->makeStubShoppingCartItemWithPrice(123));
    }

    public function testWithTwoItemsValuedAt10ShouldHaveATotalOf20()
    {
        // Best practice is to not use
        $item1 = $this->makeStubShoppingCartItemWithPrice(10);
        $item2 = $this->makeStubShoppingCartItemWithPrice(10);
        $this->cart->addItem($item1);
        $this->cart->addItem($item2);

        $this->assertEquals(20, $this->cart->total());
    }

    /**
     * @param int $price
     * @return PHPUnit_Framework_MockObject_MockObject|ShoppingCartItem
     */
    private function makeStubShoppingCartItemWithPrice($price)
    {
        $stubItem = $this->createMock(ShoppingCartItem::class);
        $stubItem->method('price')->willReturn($price);

        return $stubItem;
    }

    /**
     * @return PHPUnit_Framework_MockObject_MockObject|Logger
     */
    private function makeMockLogger()
    {
        $mockLogger = $this->createMock(Logger::class);
        $mockLogger
            ->expects($this->once())
            ->method('log')
            ->with('An item was added to the shopping cart');

        return $mockLogger;
    }
}
