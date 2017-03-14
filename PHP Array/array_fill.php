<?php
#array_fill — Fill an array with values

array array_fill ( int $start_index , int $num , mixed $value )

$start_index
Index Awal Array.

Jika index awal bernilai negative, maka index awal tersebut dimulai dari index yang bernilai 
negative dan diikuti dengan index bernilai 0,lihat contoh dibawah.

$num
Jumlah element yang akan dimasukkan/push ke array. Harus lebih besar atau samadengan 0, 
tidak boleh bernilai negatif.

$value
Nilai/value yang akan dimasukkan/push ke dalam array

$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);

#Result Method One
Array
(
    [5]  => banana
    [6]  => banana
    [7]  => banana
    [8]  => banana
    [9]  => banana
    [10] => banana
);

#Result Method Two
Array
(
    [-2] => pear
    [0] => pear
    [1] => pear
    [2] => pear
)