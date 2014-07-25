<?php
namespace chippyash\Test\Math\Matrix\Traits;
use chippyash\Math\Matrix\Traits\Debug;
use chippyash\Math\Matrix\Matrix;

class stubTraitDebug
{
    use Debug;

    public function test($msg, $matOrArr)
    {
        return $this->debug($msg, $matOrArr);
    }
}

class DebugTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new stubTraitDebug();
    }

    /**
     * @covers chippyash\Matrix\Traits\Debug::debug
     * @covers chippyash\Matrix\Traits\Debug::setDebug
     */
    public function testArrayParamReturnsStringWithDebugSwitchedOn()
    {
        $test = "/foo\+.*\+/";
        $this->object->setDebug();
        ob_start();
        $this->object->test('foo', [[1]]);
        $res = str_replace(PHP_EOL, '', ob_get_clean());
        $this->assertRegExp($test, $res);
    }

    /**
     * @covers chippyash\Matrix\Traits\Debug::debug
     * @covers chippyash\Matrix\Traits\Debug::setDebug
     */
    public function testMatrixParamReturnsStringWithDebugSwitchedOn()
    {
        $test = "/foo\+.*\+/";
        $this->object->setDebug();
        ob_start();
        $this->object->test('foo', New Matrix([1]));
        $res = str_replace(PHP_EOL, '', ob_get_clean());
        $this->assertRegExp($test, $res);
    }

    public function testArrayOrMatrixReturnsNothingWithDebugSwitchOff()
    {
        ob_start();
        $this->object->test('foo', [[1]]);
        $this->assertEmpty(ob_get_clean());
        ob_start();
        $this->object->test('foo', New Matrix([1]));
        $this->assertEmpty(ob_get_clean());
    }
}
