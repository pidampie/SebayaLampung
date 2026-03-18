<?php
// partials/header.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="top-navbar">
  <div class="nav-left">
    <!-- WRAPPER LOGO (PENTING) -->
    <div class="logo-wrapper">
      <img src="assets/img/logo.jpg" alt="Logo" class="logo-img">
    </div>

    <div class="nav-title">
      <h1>Bahasa Lampung</h1>
      <span>Pembelajaran Budaya Digital</span>
    </div>
  </div>

  <div class="nav-right">
    <div class="user-info">
      <span class="user-name">
        <?= $_SESSION['user'] ?? 'Demo Siswa'; ?>
      </span>
      <span class="user-point">⭐ 0 Poin</span>
    </div>

    <a href="logout.php" class="btn-logout">Keluar</a>
  </div>
</header>
