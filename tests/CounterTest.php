<?php

use Day1\Exercise1\Counter;

class CounterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Counter
     */
    private $counter;

    public function setUp()
    {
        $this->counter = new Counter();
    }

    public function testNextWithoutSetIncrementShouldGiveOne()
    {
        $this->assertEquals(1, $this->counter->next());
    }

    public function testWithIncrementByIntegerArgumentByOneNextShouldGiveOne()
    {
        $this->counter->setIncrement(1);
        $this->assertEquals(1, $this->counter->next());
    }

    public function testWithIncrementByIntegerArgumentByOneRunningNextTwiceShouldGetTwo()
    {
        $this->counter->setIncrement(1);
        $this->counter->next();
        $this->assertEquals(2, $this->counter->next());
    }

    public function testWithIncrementByStringArgumentShouldThrowInvalidArgumentException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $counter = new Counter();
        $counter->setIncrement('abc');
    }
}
