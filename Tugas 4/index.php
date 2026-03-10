<?php 
define ("pajak",10/100);

$nama_brg = "Keyboard";
$harga_brg = [150000,200000];

$jml_beli = 2;

function total_harga(){
    global $harga_brg, $jml_beli;
    $total_harga = $harga_brg[0] * $jml_beli;
    return $total_harga;
}

function pajak(){
    global $total_harga;
    return total_harga()*pajak;
}

function total_bayar(){
    return total_harga()+pajak();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Perhitungan Total Pembelian(Dengan Array)</h1>

    <table>
        <tr>
            <td>Nama Barang</td>
            <td> : <?= $nama_brg; ?></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td> : <?= $harga_brg[0]; ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td> : <?= $jml_beli ?></td>
        </tr>
        <tr>
            <td>Total Harga (Sebelum Pajak)</td>
            <td> : <?= total_harga(); ?></td>
        </tr>
        <tr>
            <td>Pajak(10%)</td>
            <td> : <?= pajak(); ?></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td> : <?= total_bayar(); ?></td>
        </tr>
    </table>
            
            <!-- <?= $brg["nama"] ?>
            <?= $brg["harga"]  ?> -->
            
    
</body>
</html>