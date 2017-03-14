<?php
#Syntax
array.shift()

#Parameter
None

#Definition and Usage
The shift() method removes the first item of an array, and returns that item.
shift() adalah metode yang digunakan untuk menghapus satu element dari awal yang terdapat pada array.
Metode ini akan mengubah bentuk, dan panjang dari array.
Untuk menghapus element dari akhir element array gunakan metode pop()

#Example
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.shift();
console.log(fruits);

#Result
["Orange", "Apple", "Mango"]