<html>
<head>
	<title> Output </title>
</head> 
<body>
	<?php 
	if (isset($_POST['kirim'])) {
		$nama = $_FILES['upload']['name'];
		$lokasi = $_FILES['upload']['tmp_name'];
		$namabaru = "nabila.jpg";
		move_uploaded_file($lokasi, "gambar/".$namabaru);
	}
	?>
	<p align = "center">
	<img src = "gambar/nabila.jpg" alt = "" width = "120px"><br>
	<?php
		$v1 = $_POST['namaku'];
		$v2 = $_POST['nimku'];
		$v3 = $_POST['ttlku'];
		$v4 = $_POST['emailku'];
		echo "Nama ku adalah : ".$v1;
		echo "<br>";
		echo "Nim ku adalah : ".$v2;
		echo "<br>";
		echo "Tempat tanggal lahir ku adalah : ".$v3;
		echo "<br>";
		echo "E-mail ku adalah : ".$v4;
	?>
</body>
</html>