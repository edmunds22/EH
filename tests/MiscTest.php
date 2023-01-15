<?php

use PHPUnit\Framework\TestCase;
use \edmunds22\ehs\ehs as ehs;

final class MiscTest extends TestCase
{
    public function testCheckSpams()
    {

        $this->assertEquals(
            true,
            ehs::spamFinder('sales leads')
        );

        $this->assertEquals(
            false,
            ehs::spamFinder('hello')
        );
    }
  
}