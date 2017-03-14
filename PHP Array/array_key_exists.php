<?php
array_key_exists — Checks jika key atau index yang dicari apakah exist atau didefenisikan di dalam array;

bool array_key_exists ( mixed $key , array $array )

#Result
array_key_exists() 
returns TRUE jika key yang dicari ada atau didefinisikan di dalam array.
returns FALSE jika key yang dicari tidak ada atau tidak didefinisikan di dalam array.

 #Parameters
$key
Value to check.

$array
An array with keys to check.

$search_array = array('first' => 1, 'second' => 4);

if (array_key_exists('first', $search_array)) 
{
    echo "The 'first' element is in the array";
}

$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);
