<?php
/**
 * Created by PhpStorm.
 * User: jean-kevin
 * Date: 04/03/16
 * Time: 11:35
 */

namespace Tests\AppBundle\Util;

use AppBundle\Util\Tdd;

class TddTest extends \PHPUnit_Framework_TestCase
{

    public function testAddTwoNumber()
    {
        $test = new Tdd();
        $result = $test->add("1,2");
        $this->assertEquals(3, $result);
    }

    public function testAddOneNumber()
    {
        $test = new Tdd();
        $result = $test->add("1");
        $this->assertEquals(1, $result);
    }

    public function testEmptyString()
    {
        $test = new Tdd();
        $result = $test->add("");
        $this->assertEquals(0, $result);
    }

    public function testManyNumbers()
    {
        $test = new Tdd();
        $result = $test->add("1,2,3,4,5");
        $this->assertEquals(15, $result);
    }

    public function testSlashonly()
    {
        $test = new Tdd();
        $result = $test->add("1\n3");
        $this->assertEquals(4, $result);
    }

    public function testSlashAndCommaCombinaison()
    {
        $test = new Tdd();
        $result = $test->add("1\n3,4");
        $this->assertEquals(8, $result);
    }
}