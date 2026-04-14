<?php 

if(isset($_POST['submit'])){
	$jml_roda = $_POST['jml_roda'];
	switch ($jml_roda) {
		case 2:
			echo "Motor";
			break;
		case 3;
			echo "Bajaj";
			break;
		case 4;
			echo "Mobil";
			break;
		default:
			echo "Input Error";
			break;
	}



}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soal 1</title>
</head>
<body>
	<form action="" method="post">
		Masukkan jumlah roda (2-4)= <input type="number" name="jml_roda">
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>