<?php
require_once(__DIR__."/../vendor/autoload.php");

use Drumser\Stack\SimpleStack;

class SimpleStackTest extends \PHPUnit_Framework_TestCase
{
    private $simpleStack;

    protected function setUp()
    {
        $this->simpleStack = new SimpleStack();
    }

    protected function tearDown()
    {
        $this->simpleStack = null;
    }

    public function testStack() {
        $data = 10;
        $this->simpleStack->push($data);
        $result = $this->simpleStack->pop();
        $this->assertEquals($data, $result);
    }

    public function testStackPeek() {
        $data = 10;
        $this->simpleStack->push($data);
        $result = $this->simpleStack->peek();
        $this->assertEquals($data, $result);
    }
}