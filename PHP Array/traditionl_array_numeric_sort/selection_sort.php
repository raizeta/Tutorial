<?php
//Pengurutan Descending = Pengerutan Dari Yang Terbesar Ke Terkecil
//Pengurutan Ascending  = Pengurutan Dari Yang Terkecil Ke Terbesar
public function selectionSortAction()
{
	$array 	= array(0,5,6,4,9,3,10);
	$length = sizeof($array);
    for ($i = 0; $i < $length; $i++) 
    {
        $min = $i;
        for ($j = $i+1; $j < $length; $j++) 
        {
            //Untuk Mode Descending Ubah Tanda Lebih Kecil Menjadi Lebih Besar
            if ($array[$j] < $array[$min]) 
            {
                $min = $j;
            }
        }
        $tmp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $tmp;
    }
    print_r($array);
	die;
}