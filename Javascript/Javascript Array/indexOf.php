<?php
#Syntax
array.indexOf(item,start)

#Parameters
var item	Required. The item to search for
var start	Optional. Where to start the search. Negative values will start at the given position 
counting from the end, and search to the end.

#Definition and Usage
The indexOf() method searches the array for the specified item, and returns its position.

The search will start at the specified position, or at the beginning if no start position is specified, and end the search at the end of the array.

Returns -1 if the item is not found.

If the item is present more than once, the indexOf method returns the position of the first occurence.

Note: The first item has position 0, the second item has position 1, and so on.

Tip: If you want to search from end to start, use the lastIndexOf() method

#Example Satu
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var a = fruits.indexOf("Apple");

#Result
2

#Example Dua
Search an array for the item "Apple", starting the search at position 4:

var fruits = ["Banana", "Orange", "Apple", "Mango", "Banana", "Orange", "Apple"];
var a = fruits.indexOf("Apple", 4);

#Result
6
