<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_login";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("❌ Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "✅ Data user ditemukan:<br><br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " | Username: " . $row["username"]. " | Password: " . $row["password"]. "<br>";
    }
} else {
    echo "⚠️ Belum ada data user di tabel.";
}

mysqli_close($conn);
?>
