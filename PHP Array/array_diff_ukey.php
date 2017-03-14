<?php
#array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison
array array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

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

#Note:
This function only checks one dimension of a n-dimensional array. 
Of course you can check deeper dimensions by using array_diff_ukey($array1[0], $array2[0], 'callback_func');.

#Result
Returns an array containing all the entries from array1 that are not present in any of the other arrays.

function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));

array(2) 
{
  ["red"]		=>	int(2)
  ["purple"]	=>	int(4)
}