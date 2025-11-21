<?php
$host = "localhost";
$user = "root"; // default user MySQL XAMPP
$pass = "";     // default password kosong
$db   = "db_login"; // nama database yg sudah kamu buat

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("❌ Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "✅ Koneksi berhasil ke database '$db'!";
}
?>
