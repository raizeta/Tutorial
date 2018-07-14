<?php
#array_filter — Filters elements of an array using a callback function
array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )

Iterates over each value in the array passing them to the callback function. 
If the callback function returns true, 
the current value from array is returned into the result array. 
Array keys are preserved.

$array
The array to iterate over

$callback
The callback function to use

If no callback is supplied, all entries of array equal to FALSE (see converting to boolean) will be removed.

$flag
Flag determining what arguments are sent to callback:

ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value

#Example 1

function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));

Odd :
Array
(
    [a] => 1
    [c] => 3
    [e] => 5
);
Even:

Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12
)

#Example 2, array_filter() without callback
$entry = array(
             0 => 'foo',
             1 => false,
             2 => -1,
             3 => null,
             4 => ''
          );

print_r(array_filter($entry));

Array
(
    [0] => foo
    [2] => -1
)

#Example 3, array_filter() with flag

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) 
{
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) 
{
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));

array(1) 
{
  ["b"]		=>	int(2)
}
array(2) 
{
  ["b"]		=>	int(2)
  ["d"]		=>	int(4)
}

#Notes 
Caution
If the array is changed from the callback function (e.g. element added, deleted or unset) 
the behavior of this function is undefined.