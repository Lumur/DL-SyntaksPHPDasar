<?php 
	// double slas digunakan untuk membuat satu baris komentar
/*
 tanda ini digunakan untuk membuat lebih dari satu baris komentar.
*/

 	//standar Output
 /*
1. echo, print ini berfungsi untuk memunculkan teks pada halaman web.
2. print_r
3. var_dump digunakan untuk melihat isi dari sebuah arrray.
 */

	//contoh echo
echo "Ini adalah contoh echo <br>";
print " Ini adalah contoh print. <i>hasilnya tidak jauh beda dengan echo</i> <br>";
print_r ("print_r digunakan untuk mencetak hasil array, selain itu perbedaannya terletak pada penulisannya yaitu dengan menambahkan tanda buka dan tutup kurung <br>");
var_dump("ini adalah contoh var_dump yang fungsinya untuk memperlihatkan banyak karakter dan tipe datanya <br>");


	//penulisan sintaks PHP
/*
	1. HTML dapat ditulis dalam PHP
	2. PHP dapat ditulis dalam HTML
*/

	//contoh penulisan php dalam html
/*
	<!DOCTYPE html>
	<html>
	<head>
		<title> contoh penulisan php dalam html</title>
	</head>
	<body>
		(ISI BAGIAN BODY DENGAN SEMUA SINTAKS PHP DIATAS)
		LALU HILANGKAN TANDA KOMENTAR PADA BAGIAN ATAS DAN BAWAH SINTAKS HTML.
	</body>
	</html>

*/
	//contoh penulisan html dalam php
	var_dump("ini adalah contoh <b>PENULISAN HTML DALAM PHP</b> yaitu BOLD <i> yang berfungsi untuk mempertebal tulisan</i> </br>");


	//VARIABEL
/*
 variabel memiliki aturan, yaitu variabel tidak boleh diawali dengan angka dan tidka boleh mengandung space

*/
 	//contoh
 $nama1 = "CONTOH Variabel";
echo "ini adalah <h3> $nama1 </h3>";


	// operator
/*
	1. artimatika
	+ * / %

	2. penggabung string
	 tanda titik (.)

	3.Assigment
	+= *= -= %= /= .=

	4.perbandingan
	<= >= < > ==

	5. identitas 
	=== !==

	6. logika
	&& || !

*/
	echo " <h3>contoh aritmatika</h3> ";

	$angka1 = 80;
	$angka2 = 20;
	echo $angka2 - $angka1;


	echo "<h3>penggabungan string</h3>";
	$kalimat1 = "ini adalah ";
	$kalimat2 = "contoh penggabungan string";
	var_dump($kalimat1 . $kalimat2);


	echo "<h3>operator Assigment</h3>";
	$kal1 = "ini adalah";
	$kal1 .= "</br>";
	$kal1 .= "contoh dari ";
	$kal1 .= " penggabungan string";
	echo $kal1;	


	echo "<h3>operator perbandingan</h3>";
	$a0 = 30;
	$a00 = 39;
	$hasil = $a0 >= $a00;
	var_dump($hasil);

	echo "<h3>operator identitas</h3>";
	$S = 1 !== "1";
	var_dump($S);

	echo "<h3> Logika </h3>";
	$akub = 45 * 2;
	print_r( $akub >= 90 || $akub < 80) ;
	

	echo " <a href='Daftar.php'>Daftar Aplikasi </a>"
	?>

