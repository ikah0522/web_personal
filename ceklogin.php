<?php
session_start();

// Membuat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'perpus';

$koneksi = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan query ke database untuk mencari pengguna dengan username yang sesuai
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $koneksi->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            header('Location: dashboard.php'); // Ganti dengan halaman tujuan setelah login
            exit;
        } else {
            // Password salah
            echo 'Password salah.';
        }
    } else {
        // Pengguna tidak ditemukan
        echo 'Pengguna tidak ditemukan.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
