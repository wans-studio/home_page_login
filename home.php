<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="home-container">
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>! 🎉</h2>
    <a class="logout-btn" href="logout.php">Logout</a>

    <h3>Daftar User</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['username']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
