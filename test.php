<?php
use phpunit\framework\TestCase;

class HelloPHPUnit extends TestCase
{
    public function testEquality()
    {
        $this->assertEquals(1, 1);
    }
}