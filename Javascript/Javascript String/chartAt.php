<?php
#Syntax
string.charAt(index)

#Definition and Usage
The charAt() method returns the character at the specified index in a string.

The index of the first character is 0, the second character is 1, and so on.

Tip: The index of the last character in a string is string.length-1, 
the second last character is string.length-2, and so on (See "More Examples").

#Parameter Values
Parameter     index	
Description   Required. An integer representing the index of the character you want to return

#Example
var str = "HELLO WORLD";  #panjang string = 12
var index = str.length-1; #11
var res = str.charAt(index);
console.log(res);

#Result
D