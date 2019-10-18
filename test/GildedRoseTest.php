<?php

namespace App;

class GildedRoseTest extends \PHPUnit\Framework\TestCase {

    // this is an example passing test to allow infection to run, 
    // infection requires all tests to pass to run, once you add tests, please remove this. 
    public function testFoo() {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertTrue(true);
    }
}
