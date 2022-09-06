<!DOCTYPE html>
<html>
<head>
	<title> Input </title>
</head>
<body>
	<form action = "output-outputpertemuan3.php" method = "post" enctype = "multipart/form-data">
		Pilih gambar yang ingin di upload : 
		<input type = "file" name = "upload" size = "50"><br>
		Ketikkan Namamu : <br>
		<input type = "text" name = "namaku" size = "50"><br>
		Ketikkan Nimmu : <br>
		<input type = "text" name = "nimku" size = "50"><br>
		Ketikkan Tempat Tanggal Lahirmu : <br>
		<input type = "text" name = "ttlku" size = "50"><br>
		Ketikkan E-mailmu : <br>
		<input type = "email" name = "emailku" size = "50"><br>
		<input type = "submit" value = "kirim" name = "kirim">
	</form>
</body>
</html>