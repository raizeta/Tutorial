<?php
1. Buat Dahulu Database Yang Namanya Harus Sesuai Dengan Nama Yang Terdapat Pada File env
2. Jalankan Command: php artisan migrate, Ini akan Membuat Tabel migrations Di Database Yang Baru Anda Buat Di Langkah 1,
Secara default juga akan menambahkan tabel users,password reset ke database yang anda buat.
Karena tabel tersebut sudah di defenisikan di folder database/migrations
#Mengisi table dengan data fake yang telah di defenisikan terlebih dahulu
1. php artisan db:seed 

#You may also seed your database using the migrate:refresh command, 
#which will also rollback and re-run all of your migrations. 
#This command is useful for completely re-building your database:
2. php artisan migrate:refresh --seed