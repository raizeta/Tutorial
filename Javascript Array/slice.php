<?php
#Syntax
array.slice(var start,var end)

#Parameter
var start	Required. An integer that specifies where to start 
the selection (The first element has an index of 0). 
Use negative numbers to select from the end of an array

var end	Optional. An integer that specifies where to end the selection. 
If omitted, all elements from the start position and to the end of the array will be selected. 
Use negative numbers to select from the end of an array

#Definition and Usage
The slice() method returns the selected elements in an array, as a new array object.

The slice() method selects the elements starting at the given start argument, and ends at, 
but does not include, the given end argument.

Note: The original array will not be changed.

Note: Var Start < Var End
Note: Variabel Start Harus Lebih Kecil Dari Variabel End
Jika Variabel Start Lebih Besar Dari Variabel End Maka Hasilnya adalah array kosong
[]

#Example Satu

var fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
console.log(fruits);

#Result
["Banana", "Orange", "Lemon", "Apple", "Mango"]

var citrus = fruits.slice(1, 3);

console.log(fruits);
#Result
["Banana", "Orange", "Lemon", "Apple", "Mango"]

console.log(citrus);
#Result
["Orange", "Lemon"]

#Example Dua
var fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
var myBest = fruits.slice(-3, -1);
console.log(myBest);

#Result
["Lemon", "Apple"]