<?php
#Syntax

array.map(function(currentValue,index,arr), thisValue)

#Parameter
function(var currentValue, var index,var arr)	Required. 
A function to be run for each element in the array.

var currentValue	Required. The value of the current element
var index	Optional. The array index of the current element
var arr	Optional. The array object the current element belongs to
thisValue	Optional. A value to be passed to the function to be used as its "this" value.
If this parameter is empty, the value "undefined" will be passed as its "this" value

#Definition and Usage
The map() method creates a new array with the results of calling a function for every array element.

The map() method calls the provided function once for each element in an array, in order.

Note: map() does not execute the function for array elements without values.

Note: map() does not change the original array.

#Example Satu
var numbers = [4, 9, 16, 25];
var result = numbers.map(Math.sqrt);

#Result
[2,3,4,5]

#Example Dua
var numbers = [65, 44, 12, 4];

function multiplyArrayElement(num) 
{
    return num * 10;
}

var result = numbers.map(multiplyArrayElement);

#Result
[650,440,120,40]

#Example TIga
var persons = 
[
    {firstname : "Malcom", lastname: "Reynolds"},
    {firstname : "Kaylee", lastname: "Frye"},
    {firstname : "Jayne", lastname: "Cobb"}
];


function getFullName(item,index) 
{
    var fullname = [item.firstname,item.lastname].join(" ");
    return fullname;
}

var result = persons.map(getFullName);

#Result
["Malcom Reynolds", "Kaylee Frye", "Jayne Cobb"]
