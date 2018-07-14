<?php
#Syntax
array.push(item1, item2, ..., itemX)

#Parameter
item1, item2, ..., itemX	Required. The item(s) to add to the array

push() adalah metode yang digunakan untuk menambahkan elemet ke dalam array,
dimana element tersebut diletakkan pada akhir dari array.
Metode ini akan mengubah bentuk,dan panjang dari array.
Untuk menambahkan element pada awal dari array gunakan metode unshift();


#Example Satu
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.push("Kiwi");
console.log(fruits);

#Result
["Banana", "Orange", "Apple", "Mango","Kiwi"]

#Example Dua
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.push("Kiwi","Rujak",3);
console.log(fruits);

#Result
["Banana", "Orange", "Apple", "Mango","Kiwi","Rujak",3]