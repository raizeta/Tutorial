<?php
#array_product — Calculate the product of values in an array
number array_product ( array $array )

#Result
array_product() returns the product of values in an array.

$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product(array()) . "\n";

product(a) = 384
product(array()) = 1
