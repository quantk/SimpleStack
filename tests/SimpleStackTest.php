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
    /**
     * @dataProvider stackDataProvider
     */
    public function testStack($data) {
        $this->simpleStack->push($data);
        $result = $this->simpleStack->pop();
        $this->assertEquals($data, $result);
    }

    /**
     * @dataProvider stackDataProvider
     */
    public function testStackPeek($data) {
        $data = 10;
        $this->simpleStack->push($data);
        $result = $this->simpleStack->peek();
        $this->assertEquals($data, $result);
    }

    public function stackDataProvider() {
        return [
            [10],
            [20],
            [30],
            ["Hello, Stack"],
        ];
    }
}