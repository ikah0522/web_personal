<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

// Pengecekan status login
if ($_SESSION['status'] !== 'logged_in') {
    header("Location: login.php");
    exit;
}

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>perpus</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to Dashboard</h2>
        <p>Logged in as: <?php echo $_SESSION['username']; ?></p>
        <p>Status: <?php echo $_SESSION['status']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
