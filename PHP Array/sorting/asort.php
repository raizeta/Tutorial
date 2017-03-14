<?php
Pengertian:
Adalah Fungsi Yang Digunakan Untuk Mengurutkan Element Array Associative Berdasarkan Value Dari Array 
Tersebut Secara Ascending.Dalam hal ini key dari element array tersebut tidak diperhitungkan sama sekali.

Results:
Array Associative

Contoh:
$fruits = 	array("d" => "apple", "a" => "ansor", "b" => "mangga", "c" => "pepaya","f" => "pistol");
			asort($fruits);
			print_r($fruits);
Hasil:
Array ( [a] => ansor [d] => apple [b] => mangga [c] => pepaya [f] => pistol )


Catatan:
1.Jika pada array terdapat value yang sama,maka yang menjadi urutan prioritas pertama adalah array yang disebelah 
kanan dari array yang memiliki value yang sama tersebut atau array yang memiliki index yang lebih besar lalu 
mengikuti ke  array yang memiliki index yang kecil.

Contoh:
$fruits = 	array("d" => "apple", "a" => "mangga", "b" => "mangga", "c" => "pepaya","f" => "mangga");
			asort($fruits);
			print_r($fruits);
Hasil:
Array ( [d] => apple [f] => mangga [b] => mangga [a] => mangga [c] => pepaya )

2.Jika pada element array tedapat value yang sama,tapi dibedakan oleh huruf besar dan huruf kecil, maka element array
yang memiliki value dengan huruf besar akan menjadi prioritas pertama,dan jika pada element pada value memiliki value
yang persis sama,akan diurutkan berdasarkan catatan No.1 diatas

Contoh:
$fruits = 	array("d" => "apple", "a" => "Mangga", "b" => "maNgga", "c" => "pepaya","f" => "maNgga","g"=>"mAngga");
asort($fruits);
print_r($fruits);

Hasil:
Array ( [a] => Mangga [d] => apple [g] => mAngga [f] => maNgga [b] => maNgga [c] => pepaya )