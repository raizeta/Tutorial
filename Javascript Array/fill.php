<?php
#Syntax
array.fill(var value,var start,var end)

#Parameter
var value;	Required. The value to fill the array with
var start; Must Integer;	Optional. The index to start filling the array (default is 0)
var end;   Must Integer;    Optional. The index to stop filling the array (default is array.length)

#Example Satu
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi");  

#Result
var newfruits =["Kiwi","Kiwi","Kiwi","Kiwi"]


#Example Dua
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi",0);

#Result
var newfruits =["Kiwi","Kiwi","Kiwi","Kiwi"]

#Example Tiga
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi",1);

#Result
var newfruits =["Banana","Kiwi","Kiwi","Kiwi"]

#Example Empat
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi",1);

#Result
var newfruits =["Banana","Kiwi","Kiwi","Kiwi"]

#Example Lima
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi",0,1);

#Result
var newfruits =["Kiwi","Orange","Apple","Mango"]

#Example Enam
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.fill("Kiwi",1,2);

#Result
var newfruits =["Banana","Kiwi","Apple","Mango"]