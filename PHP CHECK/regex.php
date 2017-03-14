<?php
1.Panjang String Maksimal Hanya Satu Karakter, Dan Hanya Boleh Mengandung Karakter 0-9
	/[0-9]$/

2.Panjang String Maksimal Hanya Satu Karakter, Dan Hanya Boleh Mengandung Karakter 1-9
	/[1-9]$/

3.Panjang Maksimal String Harus Dua Karakter Dimana Karakter Pertama Tidak Boleh Dimulai Dengan Karakter 0
  Untuk Karakter Kedua Karakter 0 Sudah Bisa Diikutsertakan 	
	/^[1-9][0-9]$/

4.Panjang Maksimal String Harus Tiga Karakter Dimana Karakter Pertama Harus Karakter 1-9
  Karakter Kedua 0-9,Dan Karakter Ketiga Harus Huruf Kapital yaitu A-Z 	
	/^[1-9][0-9][A-Z]$/

5.Panjang Maksimal String Tidak Terbatas,Tetapi Karakter Pertama Harus Karakter 1-9
  Karakter Kedua 0-9,Dan Karakter Ketiga,Keempat,Kelima,Sampai Ke n Harus Huruf Kapital dari A-F  	
	/^[1-9][0-9][A-Z]*$/

6.Panjang Maksimal String Tidak Terbatas,Tetapi Karakter Pertama Harus Karakter 1-9
  Karakter Kedua 0-9,Dan Karakter Ketiga,Keempat,Kelima,Sampai Ke n-1 Harus Karakter 1-9
  Tetapi Karakter Terakhir Atau Karakter Ke n Harus Huruf Kapital dari A-F  	
	/^[1-9][0-9]*[A-F]$/

6.Panjang Minimal String Harus 4 Karakter dan Panjang Maksimal String Tidak Terbatas.
  Tetapi Karakter Pertama Harus Karakter 1-9.
  Tetapi Karakter Kedua Harus0-9.
  Dan Karakter Ketiga,Keempat,Kelima,Sampai Ke n-2 Harus Karakter 1-9.
  Tetapi Karakter Ke n-1 Harus Huruf Kapital dari A-F.
  Dan Karakter Terakhir Atau Karakter Ke n Harus Huruf Kapital Dari A-C.  	
	/^[1-9][0-9]*[A-F][A-C]$/