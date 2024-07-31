<?php
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase {
    public function testAdd() {
        require __DIR__ . '/../functions/add.php';
        
        $this->assertEquals(5, add(2, 3));
        $this->assertEquals(0, add(-2, 2));
        $this->assertEquals(-5, add(-2, -3));
    }
}