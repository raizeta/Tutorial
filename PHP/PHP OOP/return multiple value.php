<?php
#Example Satu
function pass_multiple_values($first_arg,$second_arg,$third_arg)
{
  $radumta = "radumta";
   $value1= $radumta  + $first_arg; // Calculated some value and assign it to value1.
   $value2= $radumta  + $secon_arg;
   $value3= $radumta  + $third_arg;
  
    return array($value1,$value2,$value3);
}
#retrieve result dengan cara satu
list($val1, $val2, $val3) = pass_multiple_values($first_arg,$second_arg,$third_arg);
#result
$val1 = $value1;
$val2 = $value2;
$val3 = $value3;

#retrieve result dengan cara dua
$get_val = pass_multiple_values($first_arg,$second_arg,$third_arg);
echo $get_val[0];
echo $get_val[1];
echo $get_val[2];

#Example Dua
function test()
{
	$a =2;
	$b =3;
	$c =4;
   
	$arr = array('a'=>$a,'b'=>$b,'c'=>$c);
	return $arr;
 }
 
$arg = test();
 
/* Print associative array. */
print_r($arg);
#Result 
Array
(
[a] => 2
[b] => 3
[c] => 4
)
list($val1, $val2, $val3) = test();
echo ($val1, $val2, $val3);
#Result
2 3 4 


function getValues()
{
    $a = 4;
    $b = 5;
    $c = 6;
 
    return compact('a', 'b', 'c');
}
 
 
$val = getValues();
 
print_r($val);
 
/* Output */
 
Array
(
    [a] => 4
    [b] => 5
    [c] => 6
)