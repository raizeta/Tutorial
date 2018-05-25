<?php
1.sudo npm install -g nativescript
2.tns doctor //Untuk Menguji Apakah Spesifikasi Yang Dibutuhkan Telah Memenuhi
3.tns create NamaProject --template template_yang_digunakan //Untuk Membuat Project-Baru
	Template Yang Disediakan:
	1.tns-template-blank 						//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.tns-template-blank-ts 					//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	1.tns-template-drawer-navigation 			//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.tns-template-drawer-navigation-ts 		//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	1.tns-template-tab-navigation 				//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.tns-template-tab-navigation-ts 			//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	1.tns-template-master-detail 				//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.tns-template-master-detail-ts 			//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	1.tns-template-master-detail-kinvey 		//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.tns-template-master-detail-kinvey-ts 		//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	1.nativescript-template-groceries 			//Template Dengan Javascript Sebagai Bahasa Pemrogramannya
	2.nativescript-template-ng-groceries 		//Template Dengan TypeScript Sebagai Bahasa Pemrogramannya

	Jika Anda Tidak Ingin Menggunakan Template Default Yang Disediakan Maka Anda Dapat Menggunakan Perintah Dibawah Ini:
	1.tns create NamaProject --ng 	//Untuk Angular dan TypeScript
	2.tns create NamaProject 		//Untuk JavaScript

4. Masuk Ke Folder Project NamaProject Yang Anda Buat Di Langkah No.3
5. tns run android //Perintah Ini Digunakan Untuk Menjalankan Aplikasi Anda Di Simulator
				   //Perintah Ini Juga Akan Secara Otomatis Menambahkan Platform Android Di Project Anda
				   //Perintah Ini Juga Akan Menjalankan Livereload,maksudnya ketika kodingan Anda Berubah
                   //Maka Akan Otomatis Menginstall Dan Menjalankan Project Anda Di Simulator