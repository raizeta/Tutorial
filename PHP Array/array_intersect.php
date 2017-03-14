<?php
array_intersect — Computes the intersection of arrays

array array_intersect ( array $array1 , array $array2 [, array $... ] )

array_intersect() returns an array containing all the values of array1 
that are present in all the arguments. Note that keys are preserved.

#Example Satu
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

Array
(
    [a] => green
    [0] => red
)

#Example Dua
$array1 = array(2, 4, 6, 8, 10, 12);
$array2 = array(1, 2, 3, 4, 5, 6);

var_dump(array_intersect($array1, $array2));
var_dump(array_intersect($array2, $array1));



yields the following:

array(3) 
{
  [0]=> int(2)
  [1]=> int(4)
  [2]=> int(6)
}

array(3) 
{
  [1]=> int(2)
  [3]=> int(4)
  [5]=> int(6)
}

This makes it important to remember which way round you passed the arrays to the function 
if these keys are relied on later in the script.