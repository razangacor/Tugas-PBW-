<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pemrograman_web_contoh";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
	global $conn;
	$judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);

    $stmt = $conn -> prepare(
    	"INSERT INTO buku VALUES ('', ?, ?, ?, ?,?)"
    );
    $stmt -> bind_param("ssidi", $judul, $penulis, $tahun_terbit, $harga, $stok);
    $stmt -> execute();

    return mysqli_affected_rows($conn);
}

function hapus($buku_id) {
    global $conn;
    $stmt = $conn -> prepare(
    	"DELETE FROM buku WHERE buku_id = ?");
    $stmt -> bind_param("i",$buku_id);
    $stmt -> execute();

    return mysqli_affected_rows($conn);
}

function edit($data){
	global $conn;
	$buku_id = $data["buku_id"];
	$judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);
	$stmt = $conn -> prepare(
		"UPDATE buku SET 
                judul = ?,
                penulis = ?,
                tahun_terbit = ?,
                harga = ?,
                stok = ?
              WHERE buku_id = ?");
	$stmt -> bind_param("ssidii", $judul, $penulis, $tahun_terbit, $harga, $stok,$buku_id);
	$stmt -> execute();
              


    return mysqli_affected_rows($conn);

}

?>