<?php 
$barang = [
[
    "Nama" => "Baju",
    "harga" => 50000
],
[
    "Nama" => "Celana"
    "harga" => 20000
],
[
    "Nama" => "Topi"
    "harga" => 10000
]
]



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php foreach($barang as $brg): ?>
            <?= $isi["nama"] ?>
            <?= $isi["harga"]  ?>
    </form>
</body>
</html>