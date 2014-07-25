<?php
namespace chippyash\Test\Math\Matrix\Transformation;
use chippyash\Math\Matrix\Transformation\Rowslice;
use chippyash\Math\Matrix\Matrix;

/**
 * Description of RowsliceTest
 *
 */
class RowsliceTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected $testArray = array(array(1,2),array(1,2),array(1,2));

    protected function setUp()
    {
        $this->object = new Rowslice();
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Second operand is not an array
     */
    public function testComputeThrowsExceptionIfSecondOperandNotAnArray()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, 'foo');
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Second operand does not contain row indicator
     */
    public function testComputeThrowsExceptionIfSecondOperandDoesNotContainRowIndicator()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array());
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Row indicator out of bounds
     */
    public function testComputeThrowsExceptionIfRowIndicatorLessThanOne()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(0));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Row indicator out of bounds
     */
    public function testComputeThrowsExceptionIfRowIndicatorGreaterThanRows()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(4));
    }

    public function testComputeReturnsOneRowIfNumrowsNotGiven()
    {
        $m = new Matrix($this->testArray);
        $this->assertEquals(1,$this->object->transform($m, array(1))->rows());
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Numrows out of bounds
     */
    public function testComputeThrowsExceptionIfNumrowsLessThanOne()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(1,0));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Numrows out of bounds
     */
    public function testComputeThrowsExceptionIfNumrowsPlusRowIndicatorGreaterThanRows()
    {
        $m = new Matrix($this->testArray);
        $this->object->transform($m, array(1,4));
    }

    /**
     * @expectedException chippyash\Matrix\Exceptions\ComputationException
     * @expectedExceptionMessage Computation Error: Matrix parameter not complete
     */
    public function testComputeThrowsExceptionIfFirstOperandIsIncompleteMatrix()
    {
        $m = new Matrix(array(array(1,2),array(1)));
        $this->object->transform($m, array(1));
    }


    public function testEmptyMatrixReturnsEmptyMatrix()
    {
        $mA = new Matrix(array());
        $test = $this->object->transform($mA, array(1));
        $this->assertTrue($test->is('Empty'));
    }

    public function testComputeReturnsCorrectResult()
    {
        $mA = new Matrix($this->testArray);
        $this->assertEquals(2,$this->object->transform($mA, array(1,2))->rows());
        $this->assertEquals(3,$this->object->transform($mA, array(1,3))->rows());
        $this->assertEquals(1,$this->object->transform($mA, array(2,1))->rows());
        $this->assertEquals(1,$this->object->transform($mA, array(3,1))->rows());
        $this->assertEquals(2,$this->object->transform($mA, array(2,2))->rows());
    }

}
