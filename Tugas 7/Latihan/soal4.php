<?php 
if (isset($_POST['submit'])) {
	$angka = $_POST['angka'];
	$info = ($angka %2)?"Angka Tersebut Ganjil":"Angka Tersebut Genap";
	echo $info;
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soal 4</title>
</head>
<body>
	<form action="" method="post">
		Masukkan Angka= <input type="number" name="angka">
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>