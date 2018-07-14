<?php
#Syntax
array.findIndex(function(var currentValue,var index,var arr),var thisValue)

#Parameter
function(var currentValue, var index,var arr)	Required. A function to be run for each element in the array.

var currentValue	Required. The value of the current element
var index	Optional. The array index of the current element
var arr	Optional. The array object the current element belongs to;

var thisValue	Optional. A value to be passed to the function to be used as its "this" value.
If this parameter is empty, the value "undefined" will be passed as its "this" value

#Definition and Usage
The findIndex() method returns the index of the first element in an array that 
pass a test (provided as a function).

The findIndex() method executes the function once for each element present in the array:

If it finds an array element where the function returns a true value, 
findIndex() returns the index of that array element (and does not check the remaining values)
Otherwise it returns undefined;

Note: findIndex() does not execute the function for array elements without values.

Note: findIndex() does not change the original array.

var ages = [3, 10, 18, 20];

function checkAdult(age) 
{
    return age >= 18;
}

var findindex = ages.findIndex(checkAdult);

#Result
2
