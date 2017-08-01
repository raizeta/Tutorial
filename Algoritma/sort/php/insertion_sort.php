<?php
//Pengurutan Descending = Pengerutan Dari Yang Terbesar Ke Terkecil
//Pengurutan Ascending  = Pengurutan Dari Yang Terkecil Ke Terbesar
public function insertionSortAction()
{
	$array 	= array(0,8,6,4,9,3,10);
	$length = sizeof($array);
    for ($i = 1; $i < $length; $i++) 
    {
        $element = $array[$i];
        $j = $i;
        //Untuk Mode Descending Ubah Tanda Lebih Kecil Menjadi Lebih Besar
        //Pada $array[$j-1] < $element
        while($j > 0 && ($array[$j-1] > $element)) 
        {
            //move value to right and key to previous smaller index
            $array[$j] = $array[$j-1];
            $j=$j-1;
        }
        //put the element at index $j
        $array[$j]=$element;
     }
     print_r($array);
	die;
}