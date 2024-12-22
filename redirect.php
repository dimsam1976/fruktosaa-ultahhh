<?php
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html"); // Arahkan kembali ke halaman login
    exit();
}

// Jika pengguna sudah login, arahkan ke URL YouTube
header("https://drive.google.com/file/d/1FWa95R-w2hu_O0h3GbLFRdcSQ78tunp_/view?usp=drivesdk");
exit();
?>