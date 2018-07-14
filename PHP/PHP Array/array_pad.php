<?php
#array_pad — Pad array to the specified length with a value
array array_pad ( array $array , int $size , mixed $value )
#Result
array_pad() returns a copy of the array padded to size specified by size with value value. 
If size is positive then the array is padded on the right, 
if it's negative then on the left. If the absolute value of size is less than or equal to 
the length of the array then no padding takes place. It is possible to add at most 1048576 elements 
at a time.

#Parameters
$array
Initial array of values to pad.

$size
New size of the array.

$value
Value to pad if array is less than size.

$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// result is array(12, 10, 9, 0, 0)

$result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)

$result = array_pad($input, 2, "noop");
// not padded
