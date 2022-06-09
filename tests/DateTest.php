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

        $this->assertEquals(
            true,
            ehs::validateYMD('2019-09-01')
        );

        $this->assertEquals(
            false,
            ehs::validateYMD('2/19')
        );         
    }

    public function testCanConvertDateStringFormat(){

        $in = '2019-07-26';
        $out = '26/07/2019';

        $this->assertEquals(
            ehs::convertDateString('Y-m-d', 'd/m/Y', $in),
            $out
        );
    }

    public function testCanAddDaysToDate(){

        $in = '20/07/2019';
        $out = '26/07/2019';

        $this->assertEquals(
            $out,
            ehs::addDaysToDateString($in, 6, 'd/m/Y')
        );

    }

    public function testCanGetCorrectDayIndex(){

        $in = 'Wed';

        $this->assertEquals(
            2,
            ehs::weekDayIndex($in)
        );

        $this->assertEquals(
            3,
            ehs::weekDayIndex($in, 1)
        );        

    }

    public function testGeneratesCorrectSlug(){

        $in = 'my testing slug!7&^--';

        $this->assertEquals(
            'my-testing-slug-7and',
            ehs::generateSlug($in)
        );       

    }

}