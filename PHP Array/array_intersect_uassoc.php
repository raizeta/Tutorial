<?php
array_intersect_uassoc — Computes the intersection of arrays with additional index check, 
compares indexes by a callback function.

array array_intersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

Parameters ¶

$array1
Initial array for comparison of the arrays.

$array2
First array to compare keys against.

$...
Variable list of array arguments to compare values against.

$key_compare_func
The comparison function must return an integer less than, equal to, 
or greater than zero if the first argument is considered to be respectively less than, equal to, or greater than the second.
int callback ( mixed $a, mixed $b )

#Result
array_intersect_uassoc() returns an array containing all the values of array1 that are present in all 
the arguments. Note that the keys are used in the comparison unlike in array_intersect().

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));

Array
(
    [b] => brown
)