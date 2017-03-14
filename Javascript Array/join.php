<?php
#Syntax
array.join(var separator)

#Parameter
separator	Optional. The separator to be used. If omitted, the elements are separated with a comma

#Definition and Usage
The join() method joins the elements of an array into a string, and returns the string.

The elements will be separated by a specified separator. The default separator is comma (,).

#Example
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var energy = fruits.join();

#Result
"Banana,Orange,Apple,Mango"

#Example
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var energy = fruits.join(" + ");

#Result
"Banana + Orange + Apple + Mango"