<?php
//Pengurutan Descending = Pengerutan Dari Yang Terbesar Ke Terkecil
//Pengurutan Ascending  = Pengurutan Dari Yang Terkecil Ke Terbesar

$array 	= array(2,8,6,4,9,3,10);
$length = sizeof($array);
for($i = 0; $i < $length - 1; $i++)
{
	for($j = $i + 1; $j < $length; $j++)
	{
		if($array[$i] > $array[$j]) 
		//Untuk Mode Descending Ubah Tanda Lebih Besar Menjadi Lebih Kecil
		{
			$temp 		= $array[$i];
			$array[$i]  = $array[$j];
			$array[$j]  = $temp;
		}
	}
}
print_r($array);
die;