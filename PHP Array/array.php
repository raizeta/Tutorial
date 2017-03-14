<?php
array harus memiliki key yang berbeda-beda tidak boleh sama,dimana key pada element array bersifat case-sensitive. 
Jika pada suatu array terdapat key yang sama-persis,maka item array yang digunakan adalah item array yang terakhir.
Jika pada suatu array terdapat key yang sama-persis,maka jumlah item yang memeliki key yang sama persis tadi yang
dihitung adalah satu.

Contoh:
$var_array 	= array('key1'=>'Value Index 0','Value Index 1','key1'=>'Value Index 2','Value Index 3');
Perhatikan array dengan key1; //Sama Persis
print_r($var_array);
print_r(count($var_array)); //3 Jika Array Tidak Memiliki Key Yang Sama Maka Jumlahnya = 4
Result : 
Array ( [key1] => Value Index 2 [0] => Value Index 1 [1] => Value Index 3 [key2] => Value Index 4 )
3

$var_array 	= array('key1'=>'Value Index 0','Value Index 1','kEy1'=>'Value Index 2','Value Index 3');
Perhatikan array dengan key1 dengan kEy; //key1 != kEy
print_r($var_array);
print_r(count($var_array)); //4