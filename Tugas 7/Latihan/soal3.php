<?php 


if (isset($_POST['submit'])) {
	$nama1 = $_POST['nama1'];
	$nama2 = $_POST['nama2'];
	$nama3 = $_POST['nama3'];
	$nama4 = $_POST['nama4'];
	$nama5 = $_POST['nama5'];

	$hewan = [["nama" => $nama1],
			["nama" => $nama2],
			["nama" => $nama3],
			["nama" => $nama4],
			["nama" => $nama5]
			];

	foreach ($hewan as $hwn) {
		echo $hwn["nama"]."<br>";

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soal 3</title>
</head>
<body>
	<form action="" method="post">
		Masukkan Nama Hewan = 
		<br>
		<input type="text" name="nama1">
		<br>
		<input type="text" name="nama2">
		<br>
		<input type="text" name="nama3">
		<br>
		<input type="text" name="nama4">
		<br>
		<input type="text" name="nama5">
		<br>
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
</html>