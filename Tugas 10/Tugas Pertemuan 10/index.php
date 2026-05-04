<!DOCTYPE html>
<?php
require 'function.php';
session_start();
// fungsinya untuk menendang kembali ke laman login apabila belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $mhs["id"]; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
            <td><?= $mhs["alamat"]; ?></td>
            <td>
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="logout.php">Logout!</a></p>
</body>
</html>