<?php
array_intersect_ukey — Computes the intersection of arrays using a callback 
function on the keys for comparison.

array array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func )

#Result
array_intersect_ukey() returns an array containing all the values of array1 
which have matching keys that are present in all the arguments.

#Parameter
array1
Initial array for comparison of the arrays.

array2
First array to compare keys against.

...
Variable list of array arguments to compare keys against.

key_compare_func
The comparison function must return an integer less than, equal to, 
or greater than zero if the first argument is considered to be respectively less than, 
equal to, or greater than the second.

int callback ( mixed $a, mixed $b )

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

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));

array(2) 
{
  ["blue"]	=>	int(1)
  ["green"]	=>	int(3)
}

In our example you see that only the keys 'blue' and 'green' 
are present in both arrays and thus returned. 
Also notice that the values for the keys 'blue' and 'green' differ between the two arrays. 
A match still occurs because only the keys are checked. The values returned are those of array1.