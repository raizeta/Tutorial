<?php
#array_map — Applies the callback to the elements of the given arrays

array array_map ( callable $callback , array $array1 [, array $... ] )

#Result
array_map() returns an array containing all the elements of array1 after applying the callback function 
to each one. The number of parameters that the callback function 
accepts should match the number of arrays passed to the array_map()

#Parameters
$callback
Callback function to run for each element in each array.

$array1
An array to run through the callback function.

$...
Variable list of array arguments to run through the callback function.

function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);

Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)

#Example #2 array_map() using a lambda function (as of PHP 5.3.0)

$func = function($value) 
{
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));

Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)

#Example #3 array_map() - using more arrays

function show_Spanish($n, $m)
{
    return("The number ".$n." is called ".$m." in Spanish");
}

function map_Spanish($n, $m)
{
    return(array($n => $m));
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);
print_r($c);

$d = array_map("map_Spanish", $a , $b);
print_r($d);

#Result Method One; $c = array_map("show_Spanish", $a, $b);
Array
(
    [0] => The number 1 is called uno in Spanish
    [1] => The number 2 is called dos in Spanish
    [2] => The number 3 is called tres in Spanish
    [3] => The number 4 is called cuatro in Spanish
    [4] => The number 5 is called cinco in Spanish
)

#Result Method Two; $d = array_map("map_Spanish", $a , $b);
Array
(
    [0] => Array
        (
            [1] => uno
        )

    [1] => Array
        (
            [2] => dos
        )

    [2] => Array
        (
            [3] => tres
        )

    [3] => Array
        (
            [4] => cuatro
        )

    [4] => Array
        (
            [5] => cinco
        )

)