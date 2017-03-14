<?php
array array_column ( array $input , mixed $column_key, [mixed $index_key = null ] )
array array_column ( array $input , mixed $column_key [,mixed $index_key = null ] )
#Ketrerangan
$input
A multi-dimensional array or an array of objects 
from which to pull a column of values from. 
If an array of objects is provided, 
then public properties can be directly pulled. 
In order for protected or private properties to be pulled, 
the class must implement both the __get() and __isset() magic methods.

$column_key
The column of values to return. 
This value may be an integer key of the column you wish to retrieve, 
or it may be a string key name for an associative array or property name. 
It may also be NULL to return complete arrays or 
objects (this is useful together with index_key to reindex the array).

$index_key
The column to use as the index/keys for the returned array. 
This value may be the integer key of the column, 
or it may be the string key name.

#Exanple 
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

#Method 1
$first_names = array_column($records, 'first_name');
print_r($first_names);

#Result
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)

#Method 2
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);

#Result
Array
(
    [2135] => Doe
    [3245] => Smith
    [5342] => Jones
    [5623] => Doe
)