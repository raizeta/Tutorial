<?php
1.composer create-project --prefer-dist laravel/laravel blog
2.Buat Database Secara Manual
3.Masuk Ke Folder Project
4.php artisan migrate ->Untuk Membuat Tabel User dan Password Reset Di Database
5.php artisan key:generate ->Untuk Menggenerate Kode Unik, Kode Ini Terdapat Di Root->File .env
6.php artisan down --message="Upgrading Database" --retry=60 //Maintenance Disertai Dengan Message
7.php artisan up //Maintenance Finish
8.Template Maintenance Terdapat Pada-> resources/views/errors/503.blade.php