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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" id="nim" placeholder="Masukkan NIM..." required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" placeholder="Masukkan Nama..." required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan..." required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat..." required></td>
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