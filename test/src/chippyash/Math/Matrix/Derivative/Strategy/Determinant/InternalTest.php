<?php
namespace chippyash\Test\Math\Matrix\Derivative\Strategy\Determinant;
use chippyash\Math\Matrix\NumericMatrix;
use chippyash\Math\Matrix\Derivative\Strategy\Determinant\Internal;

/**
 */
class InternalTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new Internal();
    }

    public function testEmptyMatrixReturnsNull()
    {
        $this->assertNull($this->object->determinant(new NumericMatrix([])));
    }

    public function testSingleMatrixReturnsNull()
    {
        $this->assertNull($this->object->determinant(new NumericMatrix([2])));
    }

    /**
     * @dataProvider singularTwosMatrices
     */
    public function testSingularTwoByTwoMatricesReturnZero($arr)
    {
        $this->assertEquals(0, $this->object->determinant(new NumericMatrix($arr))->get());
    }

    /**
     * @dataProvider NonSingularTwosMatrices
     */
    public function testNonSingularTwoByTwoMatricesReturnNonZero($arr, $result)
    {
        $this->assertEquals($result, $this->object->determinant(new NumericMatrix($arr))->get());
    }

    /**
     * @dataProvider singularThreesMatrices
     */
    public function testSingularThreeByThreeMatricesReturnZero($arr)
    {
        $this->assertEquals(0, $this->object->determinant(new NumericMatrix($arr))->get());
    }

    /**
     * @dataProvider singularFoursMatrices
     */
    public function testSingularFourByFourMatricesReturnZero($arr)
    {
        $this->assertEquals(0, $this->object->determinant(new NumericMatrix($arr))->get());
    }


    /**
     * @dataProvider nonSingularThreesMatrices
     */
    public function testNonSingularThreeByThreeMatricesReturnNonZero($arr, $result)
    {
        $this->assertEquals($result, $this->object->determinant(new NumericMatrix($arr))->get());
    }

    /**
     * @dataProvider nonSingularNxNMatrices
     */
    public function testNonSingularNByNMatricesReturnNonZero($arr, $result)
    {
        $this->assertEquals($result, $this->object->determinant(new NumericMatrix($arr))->get());
    }


    /**
     *
     * @return array [[matrix],..]
     */
    public function singularTwosMatrices()
    {
        //all known singular 2x2 matrices
        return [
            [[[0,0],[0,0]]],
            [[[0,0],[0,1]]],
            [[[0,0],[1,0]]],
            [[[0,0],[1,1]]],
            [[[0,1],[0,0]]],
            [[[0,1],[0,1]]],
            [[[1,0],[0,0]]],
            [[[1,0],[1,0]]],
            [[[1,1],[0,0]]],
            [[[1,1],[1,1]]],
        ];
    }

    /**
     *
     * @return array [[matrix],..]
     */
    public function nonSingularTwosMatrices()
    {
        return [
            [[[1,2],[3,4]],-2]
        ];
    }

    /**
     *
     * @return array [[matrix],..]
     */
    public function singularThreesMatrices()
    {
        return [
            [
                [[1,2,3],
                 [4,5,6],
                 [7,8,9]]]
        ];
    }

    public function singularFoursMatrices()
    {
        return [
            //the Durer magic 4x4 matrix.:
            [[[32, 8, 11, 17],[8, 20, 17, 23],[11, 17, 14, 26],[17, 23, 26, 2]],0]
        ];
    }

    /**
     *
     * @return array[[matrix, result],...]
     */
    public function nonSingularThreesMatrices()
    {
        return [
            [[[1,2,3],[4,5,6],[7,8,0]],27]
        ];
    }

    public function nonSingularNxNMatrices()
    {
        return [
            //unimodular matrices - det = abs(1)
            [[[2,3,1,5],[1,0,3,1],[0,2,-3,2 ],[0,2,3,1]],1],
            [[[1,1,1,1],[1,2,1,2],[1,1,1,0],[1,4,2,3]],1],
            //other matrices
            [[[33, 9, 12, 18],[58, 20, 17, 23],[11, -34, 14, 26],[17, 23, -26, 2]],-221490]
        ];
    }
}
