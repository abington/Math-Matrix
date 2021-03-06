# Chippyash Math Matrix

## Chippyash\Test\Math\Matrix\Attribute\IsComplex

*  Sut has attribute interface
*  Complex matrix returns true
*  Non complex matrix returns false

## Chippyash\Test\Math\Matrix\Attribute\IsIdentity

*  Sut has attribute interface
*  Non numeric matrix can never be an identity matrix
*  Numeric matrix can be an identity matrix
*  Matrix having non zero in wrong place is not an identity matrix
*  Matrix having non one in wrong place is not identity matrix
*  Complex number identity matrix is recognised
*  Complex number non identity matrix is recognised
*  Rational number identity matrix is recognised
*  Rational number non identity matrix is recognised

## Chippyash\Test\Math\Matrix\Attribute\IsMarkov

*  A non numeric matrix will return false
*  A not square matrix will return false
*  Attribute returns true for a matrix that has rows that sum to the same number
*  Attribute returns false for a matrix that has rows that do not sum to the same number
*  A matrix with fewer than two rows and two columns is not a markov chain

## Chippyash\Test\Math\Matrix\Attribute\IsNonSingular

*  Sut has attribute interface
*  Singular matrices returns false
*  Non singular matrix returns true

## Chippyash\Test\Math\Matrix\Attribute\IsNumeric

*  Sut has attribute interface
*  Numeric matrix returns true
*  Non numeric matrix returns false

## Chippyash\Test\Math\Matrix\Attribute\IsRational

*  Sut has attribute interface
*  Rational matrix returns true
*  Non rational matrix returns false

## Chippyash\Test\Math\Matrix\Computation\AbstractComputation

*  Invoke expects at least one argument
*  Invoke expects less than three arguments
*  Invoke can accept two arguments
*  Invoke proxies to compute

## Chippyash\Test\Math\Matrix\Computation\Add\Matrix

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute returns empty if matrix is empty
*  Compute throws exception if both operands not same size
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Computation\Add\Scalar

*  Compute accepts scalar value
*  Compute returns empty if matrix is empty
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Computation\Div\Entrywise

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute with an empty matrix returns a matrix
*  Compute returns correct results
*  Division by zero results in zero vertices

## Chippyash\Test\Math\Matrix\Computation\Div\Matrix

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute with an empty matrix returns a matrix
*  Compute returns correct results
*  Compute with zero matrix throws exception

## Chippyash\Test\Math\Matrix\Computation\Div\Scalar

*  Compute returns empty matrix if matrix parameter is empty
*  Compute throws exception if scalar is zero for numeric matrix
*  Compute throws exception if scalar is zero for rational matrix
*  Compute throws exception if scalar is zero for complex matrix
*  Compute throws exception if scalar is boolean false
*  Compute rejects string value
*  Compute rejects non scalar value
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Computation\MatrixMultiplicationProperties

*  Matrix multiplication is not commutative
*  Multiplication by an empty matrix is commmutative
*  Multiplication by an identity matrix is commmutative
*  Multiplication by a single item matrix is commmutative
*  Multiplication by two square matrices with the same vertices is commutative
*  Multiplication maintains left distributivity over matrix addition
*  Multiplication maintains right distributivity over matrix addition
*  Scalar multiplication is compatible with matrix multiplication
*  Transposition is commutative
*  Trace is commutative

## Chippyash\Test\Math\Matrix\Computation\Mul\Entrywise

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute returns empty if matrix is empty
*  Single item matrices return single item product
*  Square x square returns square matrix
*  Multiplying two matrices that are not the same shape will throw an exception

## Chippyash\Test\Math\Matrix\Computation\Mul\Matrix

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute returns empty if matrix is empty
*  Row vector x column vector throws exception if matrices incompatible
*  Column vector x row vector throws exception if matrices incompatible
*  Single item matrices return single item product
*  Row vector x col vector returns single item matrix
*  Col vector x row vector returns square matrix of correct size
*  Square matrix x colum vector throws exception if incompatible sizes
*  Colum vector x square matrix throws undefined computation exception
*  Column vector x row vector with unmatched rows throws exception
*  Square matrix x column vector returns column vector
*  Square x square returns square matrix
*  Product of two square matrices of different sizes throws exception
*  Product of two rectangles with ma cols not equal mb rows throws exception test 1
*  Product of two rectangles with ma cols not equal mb rows throws exception test 2
*  Product of two rectangles with ma cols equal mb rows returns result test 1
*  Product of two rectangles with ma cols equal mb rows returns result test 2
*  Known output one
*  Multiply by ones row returns correct product

## Chippyash\Test\Math\Matrix\Computation\Mul\Scalar

*  Compute returns empty if matrix is empty
*  Compute accepts numeric scalar value
*  Compute rejects non numeric string value
*  Compute rejects non scalar value
*  Compute rejects non scalar value in matrix
*  Compute rejects string value in matrix
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Computation\Sub\Matrix

*  Compute rejects second param not being matrix
*  Compute only accepts matrix values
*  Compute returns empty if matrix is empty
*  Compute throws exception if both operands not same size
*  Compute throws exception if first operand vertice not scalar
*  Compute throws exception if second operand vertice not scalar
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Computation\Sub\Scalar

*  Compute accepts numeric scalar value
*  Compute rejects non numeric scalar value
*  Compute rejects non scalar value
*  Compute rejects non scalar value in matrix
*  Compute returns empty if matrix is empty
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\Decomposition\AbstractDecomposition

*  Decompose returns fluent interface
*  Invoke proxies to decompose with one parameter
*  Invoke proxies to decompose with two parameters
*  Invoke requires maximum two parameter
*  Invoke requires minimum one parameter
*  Getting invalid product throws exception
*  Magic getting invalid product throws exception
*  Getting valid product returns a value
*  Magic getting valid product returns a value
*  Getting valid product from callable returns a value
*  Magic getting valid product from callable returns a value
*  Getting invokable class product from callable returns the class
*  Setting unknown product throws exception

## Chippyash\Test\Math\Matrix\Decomposition\GaussJordanElimination

*  Decompose with one parameter throws exception
*  Decompose with non numeric matrix extra parameter throws exception
*  Decompose with non square first parameter throws exception
*  Decompose with extra matrix not having same number of rows as first matrix throws exception
*  Decompose with singular first matrix throws exception
*  Decompose with non singular first matrix returns decomposition
*  Decompose can solve linear equation

## Chippyash\Test\Math\Matrix\Decomposition\Lu

*  Decompose returns correct result

## Chippyash\Test\Math\Matrix\Derivative\AbstractDerivative

*  Invoke expects at least one argument
*  Invoke expects less than three arguments
*  Invoke can accept two arguments
*  Invoke proxies to derive

## Chippyash\Test\Math\Matrix\Derivative\Determinant

*  Sut has derivative interface
*  Non square matrix throws exception
*  Returns determinant for two by two square matrix using l u method
*  Returns determinant for two by two square matrix using laplace method
*  Undefined computation exception thrown for unknown method
*  Returns determinant for three by three square matrix using l u method
*  Returns determinant for three by three square matrix using laplace method
*  Returns determinant for n by n square matrix using l u method
*  Returns determinant for n by n square matrix using laplace method
*  Can set upper limit for lu method when auto determining strategy
*  Tuning with invalid name throws exception

## Chippyash\Test\Math\Matrix\Derivative\MarkovWeightedRandom

*  If only one choice is available for a next link it will be returned
*  A zero sum of a chain row will throw an exception
*  A non integer sum of a chain row will throw an exception
*  Using negative values will throw an exception
*  You can pick the next link in a chain

## Chippyash\Test\Math\Matrix\Derivative\Strategy\Determinant\Laplace

*  Empty matrix returns one
*  Single matrix returns value of its single entry
*  Singular two by two matrices return zero
*  Non singular two by two matrices return non zero
*  Singular three by three matrices return zero
*  Singular four by four matrices return zero
*  Non singular three by three matrices return non zero
*  Non singular n by n matrices return non zero
*  Tune clear cache false does not clear cache
*  Tune clear cache true does clear cache
*  Tuning with invalid name throws exception

## Chippyash\Test\Math\Matrix\Derivative\Sum

*  Sut has derivative interface
*  Summing a zero matrix returns int zero
*  Summing a single item matrix returns the single item
*  Summing an n plus matrix returns the sum of the vertices

## Chippyash\Test\Math\Matrix\Derivative\Trace

*  Sut has derivative interface
*  Empty matrix throws exception
*  Single item matrix returns sole vertice
*  Non square matrix throws exception
*  Returns trace for square matrix

## Chippyash\Test\Math\Matrix\Exceptions\Exceptions

*  Exceptions derived from computation exception

## Chippyash\Test\Math\Matrix\Formatter\AsciiNumeric

*  Construct gives formatter interface
*  Format as int type returns integers
*  Format as float type returns floats
*  Format as rational returns rational
*  Format as complex returns complex
*  Format default returns original content with base matrix
*  Format int returns ints with base matrix
*  Format float returns floats with base matrix
*  Format rational returns rationals with base matrix
*  Format complex returns complex with base matrix
*  Format with non real complex throws exception
*  Setting format skips non numeric vertices

## Chippyash\Test\Math\Matrix\Formatter\DirectedGraph\VertexDescription

*  A vertex description has a name
*  Setting a valid attribute will return the object
*  Setting an invalid attribute will throw an exception
*  You can test that an attribute is present
*  You can get an attribute value if it exists
*  Getting an unknown attribute value will throw an exception
*  You can get all attributes as an array
*  Getting all attributes returns keyed array with keys prepended with graphviz

## Chippyash\Test\Math\Matrix\Formatter\DirectedGraph

*  Supplying a non numeric matrix will throw an exception
*  Supplying a non container attribs parameter will throw an exception
*  You do not need to supply vertex descriptions
*  You can supply an optional edge formatter
*  Passing in a non closure as edge function will throw an exception
*  You can render a valid numeric matrix that describes a graph

## Chippyash\Test\Math\Matrix\FunctionMatrix

*  Construct properly gives function matrix
*  Construct not callable parameter raises exception
*  Construct rows less than one raises exception
*  Construct cols less than one raises exception
*  Construct gives expected output

## Chippyash\Test\Math\Matrix\IdentityMatrix

*  Construct properly gives identity matrix
*  Construct requesting rationalisation properly gives identity matrix
*  Construct size not int type raises exception
*  Construct size less than one raises exception
*  Create rational identity returns rational matrix
*  Create complex identity returns complex matrix
*  Numeric identity factory method returns matrix with int types
*  Construct with unknown matrix type throws exception

## Chippyash\Test\Math\Matrix\MatrixFactory

*  Create complex matrix with complex type entries returns complex matrix
*  Create complex matrix with complex string entries returns complex matrix
*  Create complex matrix with complex array entries returns complex matrix
*  Create complex matrix with invalid entries throws exception
*  Create rational matrix with rational type entries returns rational matrix
*  Create rational matrix with rational string entries returns rational matrix
*  Create rational matrix with rational array entries returns rational matrix
*  Create rational matrix with float entries returns rational matrix
*  Create rational matrix with invalid entries throws exception
*  Create returns correct matrix type
*  Create from function returns matrix
*  Create from function with rows less than one throws exception
*  Create from function with cols less than one throws exception
*  Create from complex returns rational matrix

## Chippyash\Test\Math\Matrix\NumericMatrix

*  Construct with base matrix throws exception
*  Construct with numeric matrix is allowed
*  Construct non empty array gives non empty matrix
*  Construct single item array gives single item matrix
*  Construct with good arrays gives numeric matrix
*  Construct with different number types gives numeric matrix
*  Construct gives normalized matrix
*  Compute returns correct result
*  Invoke with bad computation name throws exception
*  Invoke with more than two parameter throws exception
*  Invoke proxies to compute
*  Invoke proxies to derive
*  Invoke proxies to transform
*  Invoke proxies to decompose
*  Invoke proxies to parent class transform
*  Construct with incomplete data and float default returns matrix
*  Construct with incomplete data and non numeric default throws exception
*  Construct with incomplete data and numeric type default returns matrix
*  Test method accepts known attribute class name
*  Test method w ill pass unknown attribute class to parent for resolution
*  Derive will return value
*  Transform will return value
*  Decompose returns decomposition
*  Equality with strict setting returns true for same class and content
*  Equality with strict setting returns false for different class and same content
*  Equality with strict setting returns false for same class and different content
*  Equality with loose setting returns true for same class and content
*  Equality with loose setting returns true for different class and same content
*  Equality with loose setting returns false for same class and different content
*  Equality with loose setting returns false for different class and different content

## Chippyash\Test\Math\Matrix\RationalMatrix

*  Construct with rational matrix matrix gives rational matrix
*  Construct non empty array gives non empty matrix
*  Construct single item array gives single item matrix
*  Matrix get returns correct value
*  Compute returns correct result

## Chippyash\Test\Math\Matrix\ShiftMatrix

*  You can create an integer upper shift matrix
*  You can create an integer lower shift matrix
*  You can create a rational upper shift matrix
*  You can create a rational lower shift matrix
*  You can create a complex upper shift matrix
*  You can create a complex lower shift matrix
*  You can shift another matrix by multiplying with a shift matrix

## Chippyash\Test\Math\Matrix\Special\Cauchy

*  If one argument supplied to create method it must be an integer
*  If two arguments supplied to create they must both be numeric matrices
*  If two arguments supplied to create they must both be vectors
*  If two arguments supplied to create they must both be vectors of the same length
*  You can create a cauchy matrix with a single integer x parameter
*  You can create a cauchy matrix with two vector paramaters

## Chippyash\Test\Math\Matrix\Special\Functional

*  Rows parameter must be an integer
*  Cols parameter must be an integer
*  F parameter must be a closure
*  Returned matrix will be a function of the f parameter

## Chippyash\Test\Math\Matrix\Special\Identity

*  Argument supplied to create method must be an integer
*  You can create an identity matrix with a single integer size parameter
*  Size parameter must be greater than zero
*  You can create a single item identity matrix

## Chippyash\Test\Math\Matrix\Special\Ones

*  If one argument supplied to create method it must be an integer
*  If two arguments supplied to create they must both be integers
*  You can create a ones column vector with a single integer rows parameter
*  You can create a ones row matrix with two integer paramaters
*  You can create a ones matrix with two integer parameters greater than one

## Chippyash\Test\Math\Matrix\Special\Zeros

*  If one argument supplied to create method it must be an integer
*  If two arguments supplied to create they must both be integers
*  You can create a zeroes column vector with a single integer rows parameter
*  You can create a zeroes row matrix with two integer parameters
*  You can create a zeroes matrix with two integer parameters greater than one
*  Constructing with rows less than one throws exception
*  Constructing with cols less than one throws exception

## Chippyash\Test\Math\Matrix\SpecialMatrix

*  Invoking the class with no parameters throws an exceptoion
*  Invoking the class with an unknown matrix name throws an exception
*  You can invoke the class with a string type for the name
*  You can invoke the class with a string for the name
*  The create method requires a string type for the matrix name

## Chippyash\Test\Math\Matrix\Traits\AssertMatrixIsNonSingular

*  Non singular matrix returns class
*  Singular matrix throws exception

## Chippyash\Test\Math\Matrix\Traits\AssertMatrixIsNumeric

*  Numeric matrix returns class
*  Non numeric matrix throws exception

## Chippyash\Test\Math\Matrix\Traits\AssertMatrixIsRational

*  Rational matrix returns class
*  Non rational matrix throws exception
*  Non rational matrix throws exception with user message

## Chippyash\Test\Math\Matrix\Traits\AssertParameterIsNotString

*  Not string param returns class
*  String param throws exception
*  String param throws exception with user message

## Chippyash\Test\Math\Matrix\Traits\AssertParameterIsRationalMatrix

*  Testing a rational matrix returns class
*  Testing a non rational matrix throws an exception
*  Testing a non rational matrix throws an exception with user message

## Chippyash\Test\Math\Matrix\Traits\AssertParameterIsRationalNumber

*  Testing a rational matrix returns class
*  Testing a non rational number throws an exception
*  Testing a non rational number throws an exception with user message

## Chippyash\Test\Math\Matrix\Traits\ConvertNumberToComplex

*  Trait returns correct type
*  Trait throws exception for invalid numbers

## Chippyash\Test\Math\Matrix\Traits\ConvertNumberToNumeric

*  Trait returns correct type
*  Trait throws exception for invalid numbers

## Chippyash\Test\Math\Matrix\Traits\ConvertNumberToRational

*  Trait returns correct type
*  Trait throws exception for invalid numbers

## Chippyash\Test\Math\Matrix\Traits\CreateCorrectMatrixType

*  Trait returns correct type

## Chippyash\Test\Math\Matrix\Traits\CreateCorrectScalarType

*  Trait returns correct type

## Chippyash\Test\Math\Matrix\Transformation\InvertDeterminant

*  Empty matrix returns empty numeric matrix
*  Single item no zero matrix returns simple inverse numeric matrix
*  Single item zero matrix throws exception
*  Undefined computation exception thrown for unknown method
*  Compute non invertible matrices throws exception
*  Transform with numeric matrix returns correct result
*  Transform with rational matrix produces identity matrix when multiplied

## Chippyash\Test\Math\Matrix\Transformation\MarkovRandomWalk

*  You must supply a start row parameter
*  The start parameter must be an inttype
*  The target parameter must be an inttype
*  The limit parameter if provided must be an inttype
*  You must supply a target row parameter
*  You can walk through the chain by weighted random selection and return a row vector of inttypes
*  You can place a limit on the walk

## Chippyash\Test\Math\Matrix\ZeroMatrix

*  Constructing properly gives identity matrix
*  Constructing with rows less than one throws exception
*  Constructing with cols less than one throws exception


Generated by [chippyash/testdox-converter](https://github.com/chippyash/Testdox-Converter)