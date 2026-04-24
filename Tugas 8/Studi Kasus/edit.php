<?php 
require 'function.php';

$buku_id = $_GET["buku_id"];
$buku = query("SELECT * FROM buku WHERE buku_id = $buku_id")[0];
if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
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
    <title>Ubah Data Buku</title>
</head>
<body>
    <h1>Ubah Data Buku</h1>

    <form action="" method="post">
        <input type="hidden" name="buku_id" value="<?= $buku["buku_id"]; ?>">

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" id="judul" required value="<?= $buku["judul"]; ?>"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" id="penulis" required value="<?= $buku["penulis"]; ?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit" id="tahun_terbit" required value="<?= $buku["tahun_terbit"]; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" id="harga" required value="<?= $buku["harga"]; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" id="stok" required value="<?= $buku["stok"]; ?>"></td>
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