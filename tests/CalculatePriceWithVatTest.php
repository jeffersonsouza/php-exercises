<?php
use PHPUnit\Framework\TestCase;

class CalculatePriceWithVatTest extends TestCase {
    public function testAdd() {
        require __DIR__ . '/../functions/calculatePriceWithVat.php';
        
        $this->assertEquals(6, calculatePriceWithVat(25.4, 19));
        $this->assertEquals(4, calculatePriceWithVat(134, 7));
        $this->assertEquals(15, calculatePriceWithVat(235, 30));
    }
}