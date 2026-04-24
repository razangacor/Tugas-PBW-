<?php
require 'function.php';
$buku = mysqli_query($conn,"SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Data Buku</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Buku ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($buku as $book) : ?>
        <tr>
            <td><?= $book["buku_id"]; ?></td>
            <td><?= $book["judul"]; ?></td>
            <td><?= $book["penulis"]; ?></td>
            <td><?= $book["tahun_terbit"]; ?></td>
            <td><?= $book["harga"]; ?></td>
            <td><?= $book["stok"]; ?></td>
            <td>
                <a href='edit.php?buku_id=<?= $book["buku_id"]; ?>'>Ubah</a> | 
                <a href='hapus.php?buku_id=<?= $book["buku_id"]; ?>' onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>