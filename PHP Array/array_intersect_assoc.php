<?php
#array_intersect_assoc — Computes the intersection of arrays with additional index check

array array_intersect_assoc ( array $array1 , array $array2 [, array $... ] )

array_intersect_assoc() returns an array containing all the values of array1 that are present in all the arguments. 
Note that the keys are used in the comparison unlike in array_intersect().

$array1
The array with master values to check.

$array2
An array to compare values against.

...
A variable list of arrays to compare.

#Result
Returns an associative array containing all the values in array1 
that are present in all of the arguments.

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);

Array
(
    [a] => green
)