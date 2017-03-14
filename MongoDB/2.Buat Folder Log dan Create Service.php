<?php
1.Buat Folder Baru Sejajar Dengan Folder Data Yang Anda Buat Sebelumnya
2.Jika Pada Sebelumnya Anda Membuat Folder Data Pada C:MongoData\data,maka
3.Buat Folder Dengan Ketik Di Command Prompt md MongoData\log
4.Buat File mongod.cfg sejajar dengan folder data ataupun log
5.Setelah File mongod.cfg di create copy paste code dibawah ke file tersebut
systemLog:
    destination: file
    path: c:\MongoData\log\mongod.log
storage:
    dbPath: c:\MongoData\data
6.Tutup Semua Command Prompt,Lalu Buka Satu Command Prompt dengan Status Administrator Previlege,
caranya masuk ke windows,lalu cari folder accesoris,cari command prompt,klik kanan, run as administrator
7.Copy Paste kode dibawah ke Command Prompt Lalu Enter
sc.exe create MongoDB binPath= "C:\Program Files\MongoDB\Server\3.2\bin\mongod.exe --service --config=\"C:\MongoData\mongod.cfg\"" DisplayName= "MongoDB" start= "auto"
8.Action Diatas diperlukan untuk membuat Auto Service Mongo Di Windows Anda
9.Untuk Start Service : net start MongoDB
10.Untuk Stop Service : net stop MongoDB
11.Untuk Mendelete Service Yang Telah Anda Buat: sc.exe delete MongoDB