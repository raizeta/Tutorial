<?php
array array_count_values ( array $array )

#Error
Throws E_WARNING for every element which is not string or integer.

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

Array
(
    [1] => 2
    [hello] => 2
    [world] => 1
)

function array_icount_values($array) 
{
    $ret_array = array();
    foreach($array as $value) 
    {
        foreach($ret_array as $key2 => $value2) 
        {
            if(strtolower($key2) == strtolower($value)) 
            {
                $ret_array[$key2]++;
                continue 2;
            }
        }

        $ret_array[$value] = 1;
    }
    return $ret_array;
}

$ar = array('J. Karjalainen', 'J. Karjalainen', 60, '60', 
			'J. Karjalainen', 'j. karjalainen', 'Fastway', 
			'FASTWAY', 'Fastway', 'fastway', 'YUP');

$ar2 = array_count_values($ar); // Normal matching
$ar = array_icount_values($ar); // Case-insensitive matching
print_r($ar2);
print_r($ar);

#Result Method array_count_values()
Array
(
    [J. Karjalainen] => 3
    [60] => 2
    [j. karjalainen] => 1
    [Fastway] => 2
    [FASTWAY] => 1
    [fastway] => 1
    [YUP] => 1
);

#Result Method array_icount_values()
Array
(
    [J. Karjalainen] => 4
    [60] => 2
    [Fastway] => 4
    [YUP] => 1
)