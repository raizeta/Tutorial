<?php

Pengertian:
Adalah Fungsi Yang Digunakan Untuk Mengurutkan Element Array Associative Berdasarkan Key Dari Array Tersebut Secara
Descending.Dalam hal ini value dari element array tersebut tidak diperhitungkan sama sekali.

Results:
Array Associative

Contoh:
$fruits = 	array("d" => "apple", "a" => "ansor", "b" => "mangga", "c" => "pepaya","f" => "pistol");
			krsort($fruits);
			print_r($fruits);

Hasil:
Array ( [f] => pistol [d] => apple [c] => pepaya [b] => mangga [a] => ansor ) 