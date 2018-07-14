<?php
#array_diff — Computes the difference of arrays
array array_diff ( array $array1 , array $array2 [, array $... ] )

#Parameters

$array1
The array to compare from

$array2
An array to compare against

...
More arrays to compare against

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);

Array
(
    [1] => blue
)

Note:
Two elements are considered equal if and only if (string) $elem1 === (string) $elem2. 
In words: when the string representation is the same.

Note:
This function only checks one dimension of a n-dimensional array. 
Of course you can check deeper dimensions by using array_diff($array1[0], $array2[0]);.