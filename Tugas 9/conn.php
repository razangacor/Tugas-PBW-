<?php 
$conn = mysqli_connect("localhost","root","","cyber_web");

if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}


?>