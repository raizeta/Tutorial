<?php
array array_combine (array $keys , array $values )

#Keterangan
$keys
Array yang akan digunakan menjadi key.
Illegal values for key will be converted to string.

$values
Array yang digunakan menjadi value.

#Error 
Throws E_WARNING jika jumlah key and values tidak sesuai dalam pengertian jika length array key
tidak sama dengan length array value.

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

#Result
Array
(
    [green]  => avocado
    [red]    => apple
    [yellow] => banana
);