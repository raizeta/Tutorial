<?php
array array_chunk ( array $array , int $size , [bool $preserve_keys = false ] )

#Keterangan
$array
The array to work on

$size
The size of each chunk

$preserve_keys
When set to TRUE keys will be preserved. 
Default is FALSE which will reindex the chunk numerically

#Note
If size is less than 1 E_WARNING will be thrown and NULL returned.

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));

#print_r(array_chunk($input_array, 2));
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [0] => c
            [1] => d
        )

    [2] => Array
        (
            [0] => e
        )

);

#print_r(array_chunk($input_array, 2, true));
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [2] => c
            [3] => d
        )

    [2] => Array
        (
            [4] => e
        )

)