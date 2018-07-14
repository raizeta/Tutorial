<?php
#Syntaks
array.copyWithin(var target,var start, var end)
#Parameters
var target;	Required. The index position to copy the elements to
var start;	Required. The index position to start copying elements from
var end;	Optional. The index position to stop copying elements from (default is array.length)

#Example One
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var newfruits = fruits.copyWithin(2,0);

#Result
var newfruits = ["Banana","Orange","Banana","Orange"];

#Example Two
var fruits = ["Banana", "Orange", "Apple", "Mango", "Kiwi", "Papaya"];
var newfruits = fruits.copyWithin(2,0,2);

#Result
var newfruits = ["Banana","Orange","Banana","Orange","Kiwi","Papaya"];