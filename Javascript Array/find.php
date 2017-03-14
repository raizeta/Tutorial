<?php
#Syntax
array.find(function(var currentValue,var index,var arr),var thisValue)

#Parameter
function(currentValue, index,arr)	Required. A function to be run for each element in the array.
Function arguments:

var currentValue	Required. The value of the current element
var index	Optional. The array index of the current element
var arr	Optional. The array object the current element belongs to;

var thisValue	Optional. A value to be passed to the function to be used as its "this" value.
If this parameter is empty, the value "undefined" will be passed as its "this" value

#Definition and Usage
The find() method returns the value of the first element in an array that pass 
a test (provided as a function).

The find() method executes the function once for each element present in the array:

If it finds an array element where the function returns a true value, 
find() returns the value of that array element (and does not check the remaining values)
Otherwise it returns undefined

Note: find() does not execute the function for array elements without values.

Note: find() does not change the original array.

var ages = [3, 10, 18, 20];

function checkAdult(age) 
{
    return age >= 18;
}

var findages = ages.find(checkAdult);

#Result
18
