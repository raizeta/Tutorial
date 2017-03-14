<?php
#array_fill_keys — Fill an array with values, specifying keys
array array_fill_keys ( array $keys , mixed $value )

#Parameters

$keys
Array of values that will be used as keys. Illegal values for key will be converted to string.

$value
Value to use for filling

$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

Array
(
    [foo] => banana
    [5] => banana
    [10] => banana
    [bar] => banana
)