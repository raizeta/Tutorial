<?php
#Syntax
array1.concat(array2, array3,..., arrayX)

var hege = ["Cecilie", "Lone"];
var stale = ["Emil", "Tobias", "Linus"];

#Example 1
var children = hege.concat(stale);
#Result
var children =["Cecilie","Lone","Emil","Tobias","Linus"]

#Example 2
var children = stale.concat(hege);
#Result
var children =["Emil","Tobias","Linus","Cecilie","Lone"]

#Example 3
var children = stale.concat(stale);
#Result
var children =["Emil","Tobias","Linus","Emil","Tobias","Linus"]

#Example 4
var hege = ["Cecilie", "Lone"];
var stale = ["Emil", "Tobias", "Linus"];
var kai = ["Robin"];
var children = hege.concat(stale,kai);

#Result
var children = ["Cecilie","Lone","Emil","Tobias","Linus","Robin"]