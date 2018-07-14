<?php
Adalah Fungsi Yang Digunakan Untuk Mengurutkan Element Array Associative Berdasarkan Value Dari Array Tersebut Secara
Descending.Dalam hal ini key dari element array tersebut tidak diperhitungkan sama sekali.

Contoh:
$fruits = 	array("d" => "apple", "a" => "ansor", "b" => "mangga", "c" => "pepaya","f" => "pistol");
			arsort($fruits);
			print_r($fruits);
Hasil:
Array ( [f] => pistol [c] => pepaya [b] => mangga [d] => apple [a] => ansor )

Catatan:
1.Jika pada array terdapat value yang sama,maka yang menjadi urutan prioritas pertama adalah array yang disebelah 
kanan dari array yang memiliki value yang sama tersebut atau array yang memiliki index yang lebih besar lalu 
mengikuti ke  array yang memiliki index yang kecil.

Contoh:
$fruits = 	array("d" => "apple", "a" => "mangga", "b" => "mangga", "c" => "pepaya","f" => "mangga");
			arsort($fruits);
			print_r($fruits);
Hasil:
Array ( [c] => pepaya [f] => mangga [b] => mangga [a] => mangga [d] => apple ) 

2.Jika pada element array tedapat value yang sama,tapi dibedakan oleh huruf besar dan huruf kecil, maka element array
yang memiliki value dengan huruf kecil akan menjadi prioritas pertama,dan jika pada element pada value memiliki value
yang persis sama,akan diurutkan berdasarkan catatan No.1 diatas

Contoh:
$fruits = 	array("d" => "apple", "a" => "Mangga", "b" => "maNgga", "c" => "pepaya","f" => "maNgga","g"=>"mAngga");
arsort($fruits);
print_r($fruits);

Hasil:
Array ( [c] => pepaya [f] => maNgga [b] => maNgga [g] => mAngga [d] => apple [a] => Mangga )