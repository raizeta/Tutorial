SELECT * FROM TBL_EMPLOYE WHERE nama_employe NOT IN ('Radumta Sitepu');
#Semua Data Akan Ditampilkan Kecuali Yang Bernama Radumta Sitepu

SELECT * FROM TBL_EMPLOYE WHERE nama_employe NOT IN ('Radumta Sitepu','Rosantio Sitepu');
#Semua Data Akan Ditampilkan Kecuali Yang Bernama Radumta Sitepu dan Yang Bernama Rosantio Sitepu

SELECT * FROM TBL_EMPLOYE WHERE nama_employe <> 'Radumta Sitepu';
#Semua Data Akan Ditampilkan Kecuali Yang Bernama Radumta Sitepu

NB:Nama Yang Dicari Tidak Case Sensitive,tapi jumlah spasi antar kata sangat Sensitive
	SELECT * FROM TBL_EMPLOYE WHERE nama_employe <> 'Radumta Sitepu';
	SELECT * FROM TBL_EMPLOYE WHERE nama_employe <> 'RaDumta SiTepu';
	=>	Hasilnya Akan Sama

	SELECT * FROM TBL_EMPLOYE WHERE nama_employe <> 'Radumta  Sitepu';
	SELECT * FROM TBL_EMPLOYE WHERE nama_employe <> 'Radumta Sitepu';
	=>  Hasilnya Akan Berbeda Karena Pada Statement Yang Pertama Jumlah Spasi Antar Kata Berbeda 
		Dengan Jumlah Spasi Antar Kata Pada Statement Yang Kedua