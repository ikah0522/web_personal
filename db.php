<?php
$servername = "localhost";
$username = "ikaikah642@gmail.com";
$password = "123456";
$dbname = "perpus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
session_start();

require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menghindari serangan SQL Injection menggunakan parameterized query atau prepared statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['status'] = $row['status'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error_message = "Username or password is incorrect.";
    }

    $stmt->close();
}

$conn->close();
?>



