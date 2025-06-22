<?php
session_start();
include 'koneksi/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM users WHERE username= '$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_session['username'] = $user['username'];
        $_session['role'] = $user['role'];

        // Arahkan berdasarkan role
        if ($user['role'] == 'admin') {
            header("Location: admin/index.php");
        } else if ($user['role'] == 'siswa') {
            header("Location: siswa/index.php");
        }
        exit;
    } else {
        $error = "Username Atau Password Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">

</head>
<body>
    <div class="login-box">
        <div class="logo-container">
            <img src="logo.jpg" alt="Logo" class="logo">
        </div>
        <h2>Login</h2>

        <?php if (!empty($error)) : ?>
            <div class="error-message">< $error ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required />
            <input type="text" name="Password" placeholder="Password" required />
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>