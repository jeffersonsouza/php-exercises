<?php
use PHPUnit\Framework\TestCase;

class CalculateAreaTest extends TestCase {
    public function testAdd() {
        require __DIR__ . '/../functions/calculateArea.php';
        
        $this->assertEquals(6, calculateArea(2, 3));
        $this->assertEquals(4, calculateArea(2, 2));
        $this->assertEquals(15, calculateArea(5, 3));
    }
}