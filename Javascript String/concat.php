<?php
#Syntax
string.concat(string1, string2, ..., stringX)

#Definition and Usage
The concat() method is used to join two or more strings.

This method does not change the existing strings, 
but returns a new string containing the text of the joined strings.

#Parameter
Parameter 		string1, string2, ..., stringX	
Description 	Required. The strings to be joined

#Example
var str1 = "Hello ";
var str2 = "world!";
var res = str1.concat(str2);
console.log(res);

#Result
"Hello world!"

#Example Dua
var str1 = "Hello ";
var str2 = "world!";
var str3 = " Have a nice day!";
var res = str1.concat(str2,str3);
console.log(res);

#Result
"Hello world! Have a nice day!"