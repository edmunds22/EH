<?php

use PHPUnit\Framework\TestCase;
use \edmunds22\ehs\ehs as ehs;

final class DateTest extends TestCase
{
    public function testCheckDateFormats()
    {

        $this->assertEquals(
            true,
            ehs::validateDMY('19/2/2019')
        );

        $this->assertEquals(
            false,
            ehs::validateDMY('19/2')
        );        
    }
}