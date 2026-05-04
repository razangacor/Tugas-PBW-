<?php
require 'function.php';
session_start();
// fungsinya untuk menendang kembali ke laman login apabila belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
         echo "
            <script>
                alert('Tidak ada perubahan data atau data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>"></td>
            </tr>
            <tr>
                <td colspan=2><center><button type="submit" name="submit">Simpan Perubahan</button></center></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>