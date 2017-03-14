<?php

$var_array 	= array('key1'=>'Value Item 0','Value Item 1','key2'=>'Value Item 2','Value Item 3');
$var_array['key3'] = 'Value Item 4'; 	//Untuk item yang memiliki spesifik key
array_push($var_array,'Value Item 5'); 
//Untuk Item Yang Tidak Memiliki Spesifik Key Bersifat Auto Increment dari key yang nilainya paling besar
$var_array[75] = 'Value Item 6';
array_push($var_array,'Value Item 7');//keynya menjadi 76 karena key sebelumnya yang paling besar adalah 75
$var_array[72] = 'Value Item 8';
array_push($var_array,'Value Item 9');//keynya menjadi 77 karena key sebelumnya yang paling besar adalah 76
$var_array{78} = 'Value Item 10';
print_r($var_array);
Array ( 
		[key1] 	=> Value Item 0 
		[0] 	=> Value Item 1 
		[key2] 	=> Value Item 2 
		[1] 	=> Value Item 3 
		[key3] 	=> Value Item 4 
		[2] 	=> Value Item 5 
		[75] 	=> Value Item 6 
		[76] 	=> Value Item 7 
		[72] 	=> Value Item 8 
		[77] 	=> Value Item 9
		[78] 	=> Value Item 9 
	 ) 
