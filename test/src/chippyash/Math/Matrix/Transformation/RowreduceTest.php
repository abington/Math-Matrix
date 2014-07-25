<?php
namespace chippyash\Test\Math\Matrix\Transformation;
use chippyash\Math\Matrix\Transformation\Rowreduce;
use chippyash\Math\Matrix\Matrix;

/**
 * Description of RowreduceTest
 *
 */
class RowreduceTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected $testArray = array(array(1,2),array(3,4),array(5,6));

    protected function setUp()
    {
        $this->object = new Rowreduce();
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Second operand is not an array
     */
    public function testTransformThrowsExceptionIfSecondOperandNotAnArray()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, 'foo');
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Second operand does not contain row indicator
     */
    public function testTransformThrowsExceptionIfSecondOperandDoesNotContainRowIndicator()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array());
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Row indicator out of bounds
     */
    public function testTransformThrowsExceptionIfRowIndicatorLessThanOne()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(0));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Row indicator out of bounds
     */
    public function testTransformThrowsExceptionIfRowIndicatorGreaterThanRows()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(4));
    }

    public function testTransformReturnsMatrixReducedByOneRowIfNumrowsNotGiven()
    {
        $m = new Matrix($this->testArray);
        $this->assertEquals(
                array(array(3,4),array(5,6))
                ,$this->object->transform($m, array(1))->toArray()
                );
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Numrows out of bounds
     */
    public function testTransformThrowsExceptionIfNumrowsLessThanOne()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(1,0));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Numrows out of bounds
     */
    public function testTransformThrowsExceptionIfNumrowsPlusRowIndicatorGreaterThanRows()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(1,4));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Matrix parameter not complete
     */
    public function testTransformThrowsExceptionIfFirstOperandIsIncompleteMatrix()
    {
        $m = new Matrix(array(array(1,2),array(1)));
        $this->object->transform($m, array(1));
    }

    /**
     * @covers chippyash\Matrix\Transformation\Rowreduce::transform()
     */
    public function testEmptyMatrixReturnsEmptyMatrix()
    {
        $mA = new Matrix(array());
        $test = $this->object->transform($mA, array(1));
        $this->assertTrue($test->is('Empty'));
    }

    /**
     * @covers chippyash\Matrix\Transformation\Rowreduce::transform()
     */
    public function testTransformReturnsCorrectResult()
    {
        $mA = new Matrix($this->testArray);
        $this->assertEquals(
                array(array(5,6))
                ,$this->object->transform($mA, array(1,2))->toArray());
        $this->assertEquals(
                array(array()),
                $this->object->transform($mA, array(1,3))->toArray());
        $this->assertEquals(
                array(array(1,2),array(5,6)),
                $this->object->transform($mA, array(2,1))->toArray());
        $this->assertEquals(
                array(array(1,2),array(3,4)),
                $this->object->transform($mA, array(3,1))->toArray());
        $this->assertEquals(
                array(array(1,2)),
                $this->object->transform($mA, array(2,2))->toArray());
    }

}
