<?php
Perintah break digunakan di dalam perulangan berfungsi untuk 
‘menghentikan paksa’ proses perulangan yang berlangsung.
for (i=1;i<5;i++)
{ 
   if (i==3)
   {
		break;
   }

   echo "Perulangan Ke " .$i;
}
#Result
Perulangan Ke 1;
Perulangan Ke 2;

Jika perintah break digunakan untuk ‘menghentikan paksa’ 
proses perulangan yang berlangsung, 
perintah continue hanya akan menghentikan perulangan yang saat ini terjadi (1 iterasi saja), 
dan kemudian melanjutkan perulangan iterasi berikutnya, 
atau bisa disebut juga untuk ‘melewati’ 1 perulangan.

for (i=1;i<5;i++)
{ 
   if (i==3)
   {
		continue;
   }

   echo "Perulangan Ke " .$i;
}

#Result
Perulangan Ke 1;
Perulangan Ke 2;
Perulangan Ke 4;