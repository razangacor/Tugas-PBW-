<?php 

if (isset($_POST['submit'])) {
	$angka_awal = $_POST['angka_awal'];
	$angka_akhir = $_POST['angka_akhir'];
	for ($i=$angka_awal; $i <= $angka_akhir ; $i++) { 
		if ($i % 2 == 0) {
			echo $i;
			echo "<br>";
		}
	
}
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soal 2</title>
</head>
<body>
	<form action="" method="post">
			Angka awal = <input type="number" name="angka_awal"> <br>
			angka akhir = <input type="number" name="angka_akhir">
			<button type="submit" name="submit">Kirim</button>
		</form>
</body>
</html>