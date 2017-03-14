<?php
1. Enkapsulasi Objec (encapsulation) 
adalah sebuah metoda untuk mengatur struktur class dengan cara menyembunyikan alur kerja dari class 
tersebut.Dengan enkapsulasi, kita bisa membuat pembatasan akses kepada property dan method, sehingga hanya 
property dan method tertentu saja yang bisa diakses dari luar class. Enkapsulasi juga dikenal dengan 
istilah ‘information hiding’.

Dengan enkapsulasi, kita bisa memilih property dan method apa saja yang boleh diakses, dan mana yang tidak 
boleh diakses.

2. Jenis-jenis  Enkapsulasi
	*Public
	*Protected
	*Private

1.Hak Akses:Public
Ketika sebuah property atau method dinyatakan sebagai public, maka seluruh kode program di luar class bisa
mengaksesnya, termasuk class turunan.

2.Hak Akses: Protected
Jika sebuah property atau method dinyatakan sebagai protected,maka property dan method yang terdapat pada 
class tersebut hanya dapat diakses oleh class itu sendiri ataupun turunan dari class tersebut,
tetapi tidak dapat diakses dari luar class.

*.Contoh Dengan Class Itu Sendiri Tanpa Class Turunan:
1.File Class Komputer.php
class Komputer 
{
 
   protected $pemilik;
   protected function Hidupkan_Komputer() 
   {
      return "Hidupkan Komputer";
   }
}
 
2.File  Controller Komputer.php
$Komputer_Anto 			= new Komputer();
$Komputer_Anto->pemilik = "Anto";
// Fatal error: Cannot access protected property Komputer::$pemilik
  
// tampilkan protected property akan menghasilkan error
echo $Komputer_Anto->pemilik;
// Fatal error: Cannot access protected property Komputer::$pemilik
  
// jalankan protected method akan menghasilkan error
echo $Komputer_Anto->Hidupkan_Komputer();
// Fatal error: Call to protected method Komputer::Hidupkan_Komputer() 
=============================================================================================
Supaya property dan method dari class diatas dapat diakses oleh class yang lain maka harus dibuatkan method
yang memiliki hak akses public,dan method yang memiliki hak akses public inilah yang akan dipanggil di 
class yang lain.

Contoh:
1.File Class Komputer.php
class Komputer 
{
 
   protected $pemilik = 'Anto';
   public function Tunjukkan_Pemilik() 
   {
      return $this->pemilik;
   }
   protected function Hidupkan_Komputer() 
   {
      return "Hidupkan Komputer";
   }

   public function Paksa_Hidup() 
   {
      return $this->Hidupkan_Komputer();
   }
}
 
2.File  Controller Komputer.php
$Komputer_Anto = new Komputer();
echo $Komputer_Anto->Tunjukkan_Pemilik(); // "Anto"
echo $Komputer_Anto->Paksa_Hidup(); // "Hidupkan Komputer"
=======================================================================================================
**.Dengan Class Turunan
3.File Class Turunan Komputer Laptop.php
class Laptop extends komputer
{
	public function Tunjukkan_Pemilik() 
	{
	 	return $this->pemilik;
	}
}