<?php
var array = ['a','b','c','d','b','a','d','b'];
for(var i = array.length - 1; i--;)
{
	if (array[i] === "b") 
	{
		array.splice(i, 1);
	}
}
//Jika Menggunakan Increment Maka Akan Menghasilkan Error
//Untuk Meremove Item Dari Array Harus Menggunakan Decrement