<?php

addcslashes()	Returns a string with backslashes in front of the specified characters
addslashes()	Returns a string with backslashes in front of predefined characters
bin2hex()	Converts a string of ASCII characters to hexadecimal values
chop()	Removes whitespace or other characters from the right end of a string
chr()	Returns a character from a specified ASCII value
chunk_split()	Splits a string into a series of smaller parts
convert_cyr_string()	Converts a string from one Cyrillic character-set to another
convert_uudecode()	Decodes a uuencoded string
convert_uuencode()	Encodes a string using the uuencode algorithm
count_chars()	Returns information about characters used in a string
crc32()	Calculates a 32-bit CRC for a string
crypt()	One-way string hashing
echo()	Outputs one or more strings
===================================================================================================
explode(tandapemisah,string)
//Mengkonversi string menjadi kata dan memasukkannya ke dalam array sesuai dengan tandapemisah yang ditentukan
$string = 'Radumta Sitepu Doe-Doe';
$result	= explode(" ",$string);
var_dump($result);
//Result : ['Radumta','Sitepu','Doe-Doe']
$string = 'Radumta Sitepu Doe-Doe';
$result	= explode("-",$string);
var_dump($result);
//Result : ['Radumta Sitepu Doe','Doe']
===================================================================================================
fprintf()	Writes a formatted string to a specified output stream
get_html_translation_table()	Returns the translation table used by htmlspecialchars() and htmlentities()
hebrev()	Converts Hebrew text to visual text
hebrevc()	Converts Hebrew text to visual text and new lines (\n) into <br>
hex2bin()	Converts a string of hexadecimal values to ASCII characters
html_entity_decode()	Converts HTML entities to characters
htmlentities()	Converts characters to HTML entities
htmlspecialchars_decode()	Converts some predefined HTML entities to characters
htmlspecialchars()	Converts some predefined characters to HTML entities
===================================================================================================
implode() === join()
//Mengkonversi Value Dari Array Menjadi String;
//Setiap Value Akan Menjadi Satu Kata Pada String;
//Pemisah Antara Kata Dengan Kata Yang Lain Dapat Ditentukan Sendiri
echo(implode(" ",["nama"=>"Radumta","marga"=>"Sitepu"]));
//Result: Radumta Sitepu

echo(implode(",",["nama"=>"Radumta","marga"=>"Sitepu"]));
//Result: Radumta,Sitepu

echo(implode("_",["nama"=>"Radumta","marga"=>"Sitepu"]));
//Result: Radumta_Sitepu
===================================================================================================
lcfirst()
//Mengganti Huruf Pertama Pada String Menjadi Huruf Kecil
echo lcfirst("Radumta Sitepu Orang Medan");
//Result : radumta Sitepu Orang Medan
===================================================================================================
strtolower()
//Mengganti Semua Huruf Besar Menjadi Huruf Kecil
echo strtolower("Radumta Sitepu Orang Medan");
//Result : radumta sitepu orang medan
===================================================================================================
levenshtein()	Returns the Levenshtein distance between two strings
localeconv()	Returns locale numeric and monetary formatting information
ltrim()	Removes whitespace or other characters from the left side of a string
md5()	Calculates the MD5 hash of a string
md5_file()	Calculates the MD5 hash of a file
metaphone()	Calculates the metaphone key of a string
money_format()	Returns a string formatted as a currency string
nl_langinfo()	Returns specific local information
nl2br()	Inserts HTML line breaks in front of each newline in a string
number_format()	Formats a number with grouped thousands
ord()	Returns the ASCII value of the first character of a string
parse_str()	Parses a query string into variables
print()	Outputs one or more strings
printf()	Outputs a formatted string
quoted_printable_decode()	Converts a quoted-printable string to an 8-bit string
quoted_printable_encode()	Converts an 8-bit string to a quoted printable string
quotemeta()	Quotes meta characters
rtrim()	Removes whitespace or other characters from the right side of a string
setlocale()	Sets locale information
sha1()	Calculates the SHA-1 hash of a string
sha1_file()	Calculates the SHA-1 hash of a file
similar_text()	Calculates the similarity between two strings
soundex()	Calculates the soundex key of a string
sprintf()	Writes a formatted string to a variable
sscanf()	Parses input from a string according to a format
str_getcsv()	Parses a CSV string into an array
str_ireplace()	Replaces some characters in a string (case-insensitive)
str_pad()	Pads a string to a new length
str_repeat()	Repeats a string a specified number of times
str_replace()	Replaces some characters in a string (case-sensitive)
str_rot13()	Performs the ROT13 encoding on a string
===================================================================================================
str_shuffle()	Randomly shuffles all characters in a string
//Mengacak posisi setiap karakter yang terdapat pada kata/kalimat
$string = 'Radumta Sitepu Doe-Doe';
$result = str_shuffle($string);
var_dump($result);
//Result: o iDe-eSut taRaoupdeDm
//Result: dDStimpeeouaeDtoR-au  
===================================================================================================
str_split()
//Membagi setiap karakter pada string dan memasukkannya kedalam array
print_r(str_split("Radumta Sitepu"));
//Result: ['R','a','d','u','m','t','a',' ','S','i','t','e','p','u']
===================================================================================================
str_word_count()
//Menghitung Jumlah Kata Pada String
$string = 'Radumta Sitepu Doe-Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 3 Kata
$string = 'Radumta Sitepu Doe_Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 4 Kata
$string = 'Radumta Sitepu Doe#Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 4 Kata
$string = 'Radumta Sitepu Doe1Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 4 Kata
$string = 'Radumta Sitepu Doe Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 4 Kata
$string = 'Radumta Sitepu Doe - Doe';
$result	= str_word_count($string);
var_dump($result);
//Result : 5 Kata
===================================================================================================
strcasecmp()	Compares two strings (case-insensitive)
===================================================================================================
strchr()	Finds the first occurrence of a string inside another string (alias of strstr())
===================================================================================================
strcmp()	Compares two strings (case-sensitive)
===================================================================================================
strcoll()	Compares two strings (locale based string comparison)
===================================================================================================
strcspn()	Returns the number of characters found in a string before any part of some specified characters are found
===================================================================================================
strip_tags()	Strips HTML and PHP tags from a string
===================================================================================================
stripcslashes()	Unquotes a string quoted with addcslashes()
===================================================================================================
stripslashes()	Unquotes a string quoted with addslashes()
===================================================================================================
stristr()	Finds the first occurrence of a string inside another string (case-insensitive)
===================================================================================================
strlen()	Returns the length of a string
//Menghitung Panjang Karakter Dari Sebuat Kata Atau Kalimat
strlen('Radumta Sitepu')
//Result: 14, Nilai Spasi Juga Dihitung
===================================================================================================
strnatcasecmp()	Compares two strings using a "natural order" algorithm (case-insensitive)
strnatcmp()	Compares two strings using a "natural order" algorithm (case-sensitive)
strncasecmp()	String comparison of the first n characters (case-insensitive)
strncmp()	String comparison of the first n characters (case-sensitive)
strpbrk()	Searches a string for any of a set of characters
strrpos()	Returns the position of the first occurrence of a string inside another string (case-sensitive)
===================================================================================================
strrchr()	Finds the last occurrence of a string inside another string
===================================================================================================
strrev()	Reverses a string
//Membalikkan Kalimat
$string = 'Radumta Sitepu Doe-Doe';
$result = strrev($string);
var_dump($result);
//Result: eoD-eoD upetiS atmudaR
===================================================================================================
strripos()	Finds the position of the last occurrence of a string inside another string (case-insensitive)
===================================================================================================
strpos()	(case-sensitive)
//Menemukan Posisi Sebuah Kata Pada Sebuah Kalimat,Jika Karakter/Kata Yang Dicari Tidak Ditemukan Pada
//String Tersebut Akan Mengembalikan Nilai Boolean False,Bersifat Case Sensitive
$mystring = 'adacabac';
$findme   = 'ac';
$pos 	  = strpos($mystring, $findme);
//ac ada dalam kalimat pada index 2,3 dan pada index 6,7
//maka resultnya adalah 2
$mystring = 'adacabac';
$findme   = 'a';
$pos      = strpos($mystring, $findme);
//a ada dalam kalimat pada index 0,2,4,6
//maka resultnya adalah 0
$mystring = 'adacabac';
$findme   = 'f';
$pos      = strpos($mystring, $findme);
//f tidak ada dalam kalimat
//maka resultnya adalah false

$mystring = 'adacabac';
$findme   = 'Ac';
$pos      = strpos($mystring, $findme);
//Result : false
//Ac Tidak Ada Dalam Kalimat, karena Ac != ac [Case Sensitive]
===================================================================================================
stripos()	(case-insensitive)
//Sama Halny dengan fungsi strpos yaitu untuk 
//Menemukan Posisi Sebuah Kata Pada Sebuah Kalimat,Jika Karakter/Kata Yang Dicari Tidak Ditemukan Pada
//String Tersebut Akan Mengembalikan Nilai Boolean False, Hanya saja fungsi ini tidak bersifat case-sensitive
$mystring = 'adacabac';
$findme   = 'ac';
$pos 	  = strpos($mystring, $findme);
//ac ada dalam kalimat pada index 2,3 dan pada index 6,7
//maka resultnya adalah 2
$mystring = 'adacabac';
$findme   = 'a';
$pos      = strpos($mystring, $findme);
//a ada dalam kalimat pada index 0,2,4,6
//maka resultnya adalah 0
$mystring = 'adacabac';
$findme   = 'f';
$pos      = strpos($mystring, $findme);
//f tidak ada dalam kalimat
//maka resultnya adalah false

$mystring = 'adacabac';
$findme   = 'Ac';
$pos      = strpos($mystring, $findme);
//Result : 2
//Ac Ada Dalam Kalimat, karena Ac == ac [Case InSensitive]
===================================================================================================
strspn()	Returns the number of characters found in a string that contains only characters from a specified charlist
strstr()	Finds the first occurrence of a string inside another string (case-sensitive)
strtok()	Splits a string into smaller strings
===================================================================================================
strtoupper()
//Mengkonversi String Menjadi Huruf Besar Semua;
echo strtoupper("radumta sitepu orang medan");
//Result: RADUMTA SITEPU ORANG MEDAN
===================================================================================================
ucfirst()
//Mengkonversi Huruf Pertama Pada String Menjadi Huruf Besar
echo ucfirst("radumta sitepu orang medan");
//Result: Radumta sitepu orang medan
===================================================================================================
ucwords()
//Menkonversi Huruf Pertama Pada Setiap Kata Menjadi Huruf Besar
echo ucwords("radumta sitepu orang medan");
//Result: Radumta Sitepu Orang Medan
===================================================================================================
strtr()	Translates certain characters in a string
substr()	Returns a part of a string
substr_compare()	Compares two strings from a specified start position (binary safe and optionally case-sensitive)
substr_count()	Counts the number of times a substring occurs in a string
substr_replace()	Replaces a part of a string with another string
trim()	Removes whitespace or other characters from both sides of a string

vfprintf()	Writes a formatted string to a specified output stream
vprintf()	Outputs a formatted string
vsprintf()	Writes a formatted string to a variable
wordwrap()	Wraps a string to a given number of characters