<?php

array array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

Compares array1 against array2 and returns the difference. 
Unlike array_diff() the array keys are used in the comparison.

Unlike array_diff_assoc() an user supplied callback function is used for the indices comparison, 
not internal function.

$array1
The array to compare from

$array2
An array to compare against

...
More arrays to compare against

$key_compare_func
The comparison function must return an integer less than, equal to, 
or greater than zero if the first argument is considered to be respectively less than, 
equal to, or greater than the second.

int callback ( mixed $a, mixed $b )

#Notes
The "a" => "green" pair is present in both arrays and 
thus it is not in the output from the function. 
Unlike this, the pair 0 => "red" is in the output because in the second argument 
"red" has key which is 1.

This function only checks one dimension of a n-dimensional array. 
Of course you can check deeper dimensions by using, for example, 
array_diff_uassoc($array1[0], $array2[0], "key_compare_func");.

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);

Array
(
    [b] => brown
    [c] => blue
    [0] => red
)