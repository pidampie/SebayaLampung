<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['login'] = true;
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | Sebaya Lampung</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-page">

<div class="login-container">
  <img src="assets/img/logo.jpg" class="login-logo">
  <h2>Sebaya Lampung</h2>
  <p>Masuk ke akun Anda</p>

  <form method="post">
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Password" required>
    <button type="submit">Masuk</button>
  </form>

  <div class="demo-box siswa">
    <strong>Demo Siswa</strong>
    <p>Email: siswa@lampung.com</p>
    <p>Password: siswa123</p>
  </div>

  <div class="demo-box guru">
    <strong>Demo Guru</strong>
    <p>Email: guru@lampung.com</p>
    <p>Password: guru123</p>
  </div>
</div>

</body>
</html>
