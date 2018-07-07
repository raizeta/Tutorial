SELECT * FROM TBL_EMPLOYE WHERE DATE_FORMAT(create_at,'%d %M %Y') = '04 July 2018';

SELECT * FROM TBL_EMPLOYE WHERE DATE_FORMAT(create_at,'%d-%m-%Y') = '04-07-2018';

SELECT * FROM TBL_EMPLOYE WHERE DATE_FORMAT(create_at,'%d/%m/%Y') = '04/07/2018';

#DATE FORMAT
%Y = Tahun dengan empat digit 			=> 2018;
%y 	= Tahun dengan Dua Digit 			=> 18;

%M 	= Bulan Dengan Huruf Yang Lengkap 	=> January,February,March...December
%b 	= Bulan Dengan Singkatan Huruf 		=> Jan,Feb,Mar...Dec 
%m 	= Bulan Dengan Angka Dimana Bulan Yang Bukan Puluhan Wajib Dua Angka 		
	  => 01,02,03,04,05,06,07,08,09,10,11,12
%c 	= Bulan Dengan Angka Dimana Bulan Yang Bukan Puluhan Wajib Satu Angka 
      => 1,2,3,4,5,6,7,8,9,10,11,12

%W 	= Hari Dengan Huruf Yang Lengkap 	=> Sunday,Monday...Saturday
%a  = Hari Dengan Singkatan Huruf 		=> Sund,Mon...Sat

%d 	= Tanggal Dengan Angka Dimana Tanggal Yang Bukan Puluhan Wajib Dua Angka
	  => 01,02,03,04,05,06,07,08,09...31

%e 	= Tanggal Dengan Angka Dimana Tanggal Yang Bukan Puluhan Wajib Satu Angka
	  => 01,02,03,04,05,06,07,08,09...31

%D  = Tanggal Dengan Suffix Penamaan Bahasa Inggris
	  => 0th,1st,2nd,3th,4th,5th,6th,7th,8th..31th



