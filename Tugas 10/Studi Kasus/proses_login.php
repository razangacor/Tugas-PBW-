<?php

session_start();

include 'function.php'; // koneksi menggunakan MySQLi OOP

// Proses jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek user di database
    $stmt = $conn->prepare("SELECT username, password FROM user WHERE username = ? ");

    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result();

    // Validasi hasil
    // ... (setelah fetch_assoc dari hasil query)

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verifikasi password yang diinput dengan hash di database
    if ($password == $user['password']) {
        // Password benar
        $_SESSION['username'] = $user['username'];
        
        header("Location: index.php");
        exit;
    } else {
        // Password salah
        header("Location: login.php?message=" . urlencode("password salah bro..."));
        exit;
    }
} else {
    // Username tidak ditemukan
    header("Location: login.php?message=" . urlencode("Username tidak terdaftar!"));
    exit;
}

$stmt->close();
}

?>