<?php
#array_intersect_key — Computes the intersection of arrays using keys for comparison

array array_intersect_key ( array $array1 , array $array2 [, array $... ] )

#Result
array_intersect_key() returns an array containing all the entries of array1 
which have keys that are present in all the arguments.

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));

array(2) 
{
  ["blue"]		=>	int(1)
  ["green"]		=>	int(3)
}

In our example you see that only the keys 'blue' and 'green' are present in both arrays and thus returned. 
Also notice that the values for the keys 'blue' and 'green' differ between the two arrays. 
A match still occurs because only the keys are checked. The values returned are those of array1.

The two keys from the key => value pairs are considered equal only if (string) $key1 === (string) $key2 . In other words a strict type check is executed so the string representation must be the same.

