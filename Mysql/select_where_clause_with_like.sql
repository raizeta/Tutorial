SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE 'a%';
Menampilkan Data Employe Yang Namanya Dimulai Dengan Huruf a Atau Huruf A 

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '%a';
Menampilan Data Employe Yang Akhiran Namanya Huruf a Atau Huruf A

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '%a%';
Menampilan Data Employe Yang Namanya Mengandung Huruf a Atau Huruf A,Tidak Tergantung Posisinya Dimana

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE 'a%u';
Menampilan Data Employe Yang Namanya Dimulai Huruf a||A dan Akhiran Namanya Huruf u||U

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '_a%';
Menampilan Data Employe Yang Huruf Kedua Namanya Adalah Huruf a||A.Jika jumlah underscore diulang menjadi dua kali
maka akan menampilan data employe yang huruf ketiga namanya adalah Huruf a||A,begitu seterusnya.


SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '[abs]%';
Menampilkan Data Employe Yang Namanya Dimulai Dengan Huruf a||A,b||B,s||S 

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '[a-e]%';
Menampilkan Data Employe Yang Namanya Dimulai Dengan Huruf a||A,b||B,c||C,d||d,e||E

SELECT * FROM TBL_EMPLOYE WHERE nama_employe LIKE '[!abs]%';
Menampilkan Data Employe Yang Namanya Tidak Dimulai Dengan Huruf a||A,b||B,s||S