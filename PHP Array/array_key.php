<?php
#array_keys — Return all the keys or a subset of the keys of an array

array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )

#Result
array_keys() returns the keys, numeric and string, from the array.

If the optional search_value is specified, then only the keys for that value are returned. 
Otherwise, all the keys from the array are returned.

#Parameters
$array
An array containing keys to return.

$search_value
If specified, then only keys containing these values are returned.

$strict
Determines if strict comparison (===) should be used during the search.

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array(
				"color" => array("blue", "red", "green"),
               	"size"  => array("small", "medium", "large")
       		  );
print_r(array_keys($array));

#Result Method Satu
Array
(
    [0] => 0
    [1] => color
)

#Result Method Dua
Array
(
    [0] => 0
    [1] => 3
    [2] => 4
)

#Result Method Tiga
Array
(
    [0] => color
    [1] => size
)