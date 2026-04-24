<?php
require 'function.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>

    <form action="" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul" placeholder="Masukkan judul..." required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" id="penulis" placeholder="Masukkan penulis..." required></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan tahun terbit..." required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" id="harga" placeholder="Masukkan harga..." required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" id="stok" placeholder="Masukkan stok..." required></td>
            </tr>
            <tr>
                <td colspan=2><center><button type="submit" name="submit">Tambah Data</button></center></td>
            </tr>
        </table>
                
       
    </form>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>