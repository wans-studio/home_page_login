<?php
$host = "localhost";
$user = "root"; // default MySQL user XAMPP
$pass = "";     // default password kosong
$db   = "db_login";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
