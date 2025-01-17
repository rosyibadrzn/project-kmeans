<?php
// Konfigurasi database
$servername = "localhost"; // Alamat server MySQL
$username = "root";        // Username MySQL
$password = "";            // Password MySQL
$database = "kmeans_project"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // Uncomment ini untuk debug
    // echo "Koneksi berhasil!";
}
?>
