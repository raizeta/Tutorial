<?php
#Syntax
array.unshift(item1,item2, ..., itemX)

#Parameter
item1,item2, ..., itemX	Required. The item(s) to add to the beginning of the array

#Definition and Usage
unshift() adalah metode dimana element yang ditambahkan kedalam array,
akan diletakkan pada awal dari array tersebut.
Metode ini mengubah bentuk,panjang dari array.

Untuk menambahkan element pada array dan meletakkannya di akhir dari array tersebut,
gunakan push();

#Example Satu
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.unshift("Lemon","Pineapple");
console.log(fruits);

#Result
["Lemon", "Pineapple", "Banana", "Orange", "Apple", "Mango"]

#Example Dua
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.unshift(["Lemon","Pineapple"]);
console.log(fruits);

#Result
[["Lemon", "Pineapple"], "Banana", "Orange", "Apple", "Mango"]