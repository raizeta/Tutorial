<?php
#Syntax
array.splice(var index,var howmany,var item1,.....,var itemX)

#Parameter
var index	Required. An integer that specifies at what position to add/remove items, Use negative values to specify the position from the end of the array
var howmany	Required. The number of items to be removed. If set to 0, no items will be removed
var item1, ..., itemX	Optional. The new item(s) to be added to the array

#Definition and Usage
The splice() method adds/removes items to/from an array, and returns the removed item(s).

Note: This method changes the original array.

#Example Satu
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.splice(2, 1, "Lemon", "Kiwi");
console.log(fruits);
#At position 2, add the new items, and remove 1 item:

#Result
["Banana","Orange","Lemon","Kiwi","Mango"]

#Example Dua
var fruits = ["Banana", "Orange", "Apple", "Mango", "Kiwi"];
var newfruits = fruits.splice(2, 2);
#At position 2, remove 2 items:

console.log(fruits);
#Result
["Banana", "Orange", "Lemon", "Kiwi"]

console.log(newfruits);
#Result
["Apple", "Mango"]

