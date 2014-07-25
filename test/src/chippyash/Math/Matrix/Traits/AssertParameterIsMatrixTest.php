<?php
namespace chippyash\Test\Math\Matrix\Traits;
use chippyash\Math\Matrix\Traits\AssertParameterIsMatrix;
use chippyash\Math\Matrix\Matrix;

class stubTraitAssertParameterIsMatrix
{
    use AssertParameterIsMatrix;

    public function test($param, $msg = null)
    {
        return (is_null($msg))
                ? $this->assertParameterIsMatrix($param)
                : $this->assertParameterIsMatrix($param, $msg);
    }
}

class AssertParameterIsMatrixTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new stubTraitAssertParameterIsMatrix();
    }

    /**
     * @covers chippyash\Matrix\Traits\AssertParameterIsMatrix::assertParameterIsMatrix
     */
    public function testMatrixParamReturnsClass()
    {
        $this->assertInstanceOf(
                'chippyash\Test\Matrix\Traits\stubTraitAssertParameterIsMatrix',
                $this->object->test(new Matrix([])));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Parameter is not a matrix
     * @covers chippyash\Matrix\Traits\AssertParameterIsMatrix::assertParameterIsMatrix
     */
    public function testNotMatrixParamThrowsException()
    {
        $this->object->test('foo');
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: foo
     * @covers chippyash\Matrix\Traits\AssertParameterIsMatrix::assertParameterIsMatrix
     */
    public function testNotMatrixParamThrowsExceptionWithUserMessage()
    {
        $this->object->test('bar', 'foo');
    }
}
