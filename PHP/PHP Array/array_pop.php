<?php
#array_pop — Pop the element off the end of array
mixed array_pop ( array &$array )

#Result
array_pop() pops and returns the last value of the array, shortening the array by one element.
 If array is empty (or is not an array), NULL will be returned.

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);

print_r($stack);
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
);

print_r($fruit)
Array
(
	[0] => raspberry
)