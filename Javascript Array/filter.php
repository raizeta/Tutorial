<?php
#Syntax
array.filter(function(var currentValue,var index,var arr), var thisValue)

#Definition and Usage
The filter() method creates an array filled with all array elements 
that pass a test (provided as a function).

Note: filter() does not execute the function for array elements without values.

Note: filter() does not change the original array.

function(currentValue, index,arr)	
Required. A function to be run for each element in the array.
var currentValue	Required. The value of the current element
var index	Optional. The array index of the current element
var arr	Optional. The array object the current element belongs to.

var thisValue	Optional. A value to be passed to the function to be used as its "this" value.
If this parameter is empty, the value "undefined" will be passed as its "this" value



var ages = [32, 31, 33, 16, 40,18];

function checkAdult(age) 
{
    return age >= 18;
}

var newages = ages.filter(checkAdult);

#Result
var newages = [32,31,33,40,18]

