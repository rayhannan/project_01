<?php
// Konfigurasi database
$host = 'localhost'; // Ganti sesuai dengan host Anda
$dbname = 'dbpuskesmas'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = ''; // Ganti dengan kata sandi database Anda
$port = 3306; // Ganti dengan port yang Anda inginkan

$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

// Buat koneksi Database
$dbh = new PDO($dsn, $user, $pass );
