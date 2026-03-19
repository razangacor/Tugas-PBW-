<?php 
$nama = "";
$nilai = "";
$predikat = "";
$status = "";
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    if($nilai >= 85 && $nilai <= 100){
        $predikat = "A";
        $status = "Lulus";
    } elseif($nilai >= 75){
        $predikat = "B";
        $status = "Lulus";
    } elseif($nilai >= 65){
        $predikat = "C";
        $status = "Lulus";
    } elseif($nilai >= 50){
        $predikat = "D";
        $status = "Tidak Lulus";
    } elseif($nilai >= 0){
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak Valid";
        $status = "Tidak Valid";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Menu</title>
</head>
<body>
        <table border = "1">
            <tr>
                <th>Rentang Nilai</th>
                <th>Predikat</th>
            </tr>
            <tr>
            <td>85 - 100</td>
            <td>A</td>
        </tr>
        <tr>
            <td>75 - 84</td>
            <td>B</td>
        </tr>
        <tr>
            <td>65 - 74</td>
            <td>C</td>
        </tr>
        <tr>
            <td>50 - 64</td>
            <td>D</td>
        </tr>
        <tr>
            <td>0 - 49</td>
            <td>E</td>
        </tr>
        <tr>
            <td>Lainnya</td>
            <td>Tidak Valid</td>
        </tr>
        </table>

        <form method="post" action="">
            Nama: <input type="text" name="nama"><br>
            Nilai: <input type="number" name="nilai"><br>
            <input type="submit" value="Proses" name="submit">
        </form>

        <?php if($nama != ""): ?>
            <h3>Hasil:</h3>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama ?> <br></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><?= $nilai ?> <br></td>
                </tr>
                <tr>
                    <td>Predikat</td>
                    <td>:</td>
                    <td><?= $predikat ?> <br></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?= $status ?> <br></td>
                </tr>
            </table>
        <?php endif; ?>

</body>
</html>