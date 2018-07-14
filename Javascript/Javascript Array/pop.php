<?php
#Syntax
array.pop()

#Parameter
None

#Definition and Usage
The pop() method removes the last element of an array, and returns that element.
pop() adalah metode yang digunakanan untuk menghapus element terakhir dari array.
Methode ini mengubah bentuk dan panjang dari array.
Jika ingin menghapus element pertama dari array gunankan metode shif();

#Example
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var newfruits  = fruits.pop();

console.log(fruits);
#Result
["Banana", "Orange", "Apple"]

console.log(newfruits);
#Result
Mango;
