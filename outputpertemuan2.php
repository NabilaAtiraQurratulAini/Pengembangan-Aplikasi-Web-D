<!DOCTYPE html>
<html>
<head>
	<title> Output Pertemuan Ke 2 </title>
</head>
<body>
	<h1> Contoh 1 </h1>
	<?php
	//pembuatan fungsi
	function perkalian($angka1, $angka2){
		$a = $angka1;
		$b = $angka2;
		$hasil = $a * $b;
		return $hasil;
	}
	//pemanggilan fungsi
	$hasil = perkalian(4, 5);
	echo "Perkalian 4 x 5 adalah $hasil";
	echo "<br/>";
	echo "Perkalian 7 x 2 adalah ".perkalian(7, 2);
	echo "<br/>";
	?>
	
	<h1> Contoh 2 </h1>
	<?php
	//pemanggilan fungsi
	echo "Luas Lingkaran dengan jari-jari 7cm = ".luas_lingkaran(7)."cm";
	//pembuatan fungsi
	function luas_lingkaran($jari2){
		return M_PI * $jari2 * $jari2;
		}
	echo "<br />";
	?>
	
	<h1> Contoh 3 </h1>
	<?php
	//pemanggilan fungsi
	echo "Luas Persegi Panjang dengan panjang 10cm dan lebar 5cm = ".luas_persegipanjang(10,5)."cm";
	//pembuatan fungsi
	function luas_persegipanjang($panjang, $lebar){
		return $panjang * $lebar;
	}
	?>
</body>
</html>