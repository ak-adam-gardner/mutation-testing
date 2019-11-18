<?php

namespace App;

class GildedRoseTest extends \PHPUnit\Framework\TestCase {

    public $aged = "Aged Brie";
    public $backstage = "Backstage passes to a TAFKAL80ETC concert";
    public $sulfuras = "Sulfuras, Hand of Ragnaros";
    public $elixer = "Elixir of the Mongoose";

    public function testUpdateQualityWithAgedBrie() {
        $items = [new Item($this->aged, 2, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->aged, $items[0]->name);
        $this->assertEquals("1", $items[0]->sell_in);
        $this->assertEquals("1", $items[0]->quality);
    }

    public function testUpdateQualityWithAgedBrieMinusSellIn() {
        $items = [new Item($this->aged, -2, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->aged, $items[0]->name);
        $this->assertEquals("-3", $items[0]->sell_in);
        $this->assertEquals("2", $items[0]->quality);
    }

    public function testUpdateQualityWithBackstage() {
        $items = [new Item($this->backstage, 3, 5)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->backstage, $items[0]->name);
        $this->assertEquals("2", $items[0]->sell_in);
        $this->assertEquals("8", $items[0]->quality);
    }

    public function testUpdateQualityWithBackstageWithFifteenSellIn() {
        $items = [new Item($this->backstage, 15, 20)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->backstage, $items[0]->name);
        $this->assertEquals("14", $items[0]->sell_in);
        $this->assertEquals("21", $items[0]->quality);
    }

    public function testUpdateQualityWithBackstageAndTenSellIn() {
        $items = [new Item($this->backstage, 10, 49)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->backstage, $items[0]->name);
        $this->assertEquals("9", $items[0]->sell_in);
        $this->assertEquals("50", $items[0]->quality);
    }

    public function testUpdateQualityWithBackstageAndFiveSellIn() {
        $items = [new Item($this->backstage, 5, 49)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->backstage, $items[0]->name);
        $this->assertEquals("4", $items[0]->sell_in);
        $this->assertEquals("50", $items[0]->quality);
    }

    public function testUpdateQualityWithSulfuras() {
        $items = [new Item($this->sulfuras, 0, 80)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->sulfuras, $items[0]->name);
        $this->assertEquals("0", $items[0]->sell_in);
        $this->assertEquals("80", $items[0]->quality);
    }

    public function testUpdateQualityWithSulfurasMinusSellIn() {
        $items = [new Item($this->sulfuras, -1, 80)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->sulfuras, $items[0]->name);
        $this->assertEquals("-1", $items[0]->sell_in);
        $this->assertEquals("80", $items[0]->quality);
    }

    public function testUpdateQualityWithElixer() {
        $items = [new Item($this->elixer, 5, 7)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals($this->elixer, $items[0]->name);
        $this->assertEquals("4", $items[0]->sell_in);
        $this->assertEquals("6", $items[0]->quality);
    }

}
