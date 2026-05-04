<?php
// Memulai sesi untuk mengakses variabel $_SESSION
session_start();

// Mengecek apakah kunci sesi login sudah ada
if (!isset($_SESSION['login_Un51k4'])) {
    
    // Menyiapkan pesan peringatan
    $message = urlencode("Mengakses fitur harus login dulu bro.");
    
    // Mengarahkan pengguna ke halaman login dengan pesan
    header("Location: login.php?message=" . $message);
    
    // Menghentikan eksekusi skrip agar kode di bawah tidak dijalankan
    exit;
}