<?php
array_merge — Merge one or more arrays

array array_merge ( array $array1 [, array $... ] )

#Result
Merges the elements of one or more arrays together so that the values of one are appended to the end of 
the previous one. It returns the resulting array.

If the input arrays have the same string keys, then the later value for that key will overwrite 
the previous one. If, however, the arrays contain numeric keys, the later value will not overwrite 
the original value, but will be appended.

Values in the input array with numeric keys will be renumbered with incrementing keys starting from zero
in the result array.

#Example One
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)

#Example Two
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);

Array
(
    [0] => data
)