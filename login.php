<?php
session_start(); // Memulai sesi

// Simpan status login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['loggedin'])) {
        $_SESSION['loggedin'] = true; // Set status login
    }
}
?>