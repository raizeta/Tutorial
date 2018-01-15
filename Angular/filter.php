<?php
# Jika Di Dalam View
- uppercase
	{{radumta|uppercase}}	=> RADUMTA
- lowercase
    {{RADUMTA|lowercase}}	=> radumta

- number 
	{{12000|number}} 		=> 12,000
	{{12000|number:2}}		=> 12,000.00
- currency
	{{1234.56|currency}}	=> $1,234.56

 #Jika Di Dalam Controller
 - uppercase
 	$filter('uppercase')('radumta'); 	=> RADUMTA

- lowercase
 	$filter('lowercase')('RADUMTA'); 	=> radumta

- number
	$filter('number')(12000); 		=> 12,000
	$filter('number')(12000, 4);	=> 12,000.0000

- currency
	$filter('currency')(12000); 		=> $12,000.00