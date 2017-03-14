<?php
array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )

array1
The array to compare from

array2
An array to compare against

...
More arrays to compare against

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
print_r($result);

Array
(
    [0] => 0
    [1] => 1
)