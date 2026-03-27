<?php
// partials/header.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="top-navbar lampung-gradient flex items-center justify-between px-8 py-3 border-b-4 lampung-border shadow lampung-shadow"
        style="min-height:64px; position:relative;">
  <div class="flex items-center gap-4">
    <div class="flex items-center gap-3">
      <div class="logo-wrapper border-2 lampung-border bg-black flex items-center justify-center">
        <img src="assets/img/logo.png" alt="Logo" class="logo-img w-10 h-10 rounded-full">
      </div>
    </div>
  </div>
  <div class="flex items-center gap-4">
      <div class="nav-title flex flex-col justify-center items-center text-center w-full"
     style="position:absolute; left:50%; top:50%; bottom:10%; transform:translate(-50%, -60%); text-align:center;">
        <div class="text-center w-full">
            <h1 class="text-xl lampung-text font-extrabold mb-0 w-full text-center" style="color:#000;">SEBAYA LAMPUNG</h1>
            <span class="text-sm text-white font-semibold tracking-wide w-full text-center">Pembelajaran Digital Budaya Lampung</span>
        </div>
      </div>
    </div>
  </div>
  <div class="flex items-center gap-6">
    <div class="user-info text-right">
      <span class="user-name lampung-text font-bold block">
        <?= $_SESSION['user'] ?? 'Demo Siswa'; ?>
      </span>
      <span class="user-point text-yellow-200">⭐ 0 Poin</span>
    </div>
    <a href="logout.php" class="lampung-btn px-4 py-1 text-base">Keluar</a>
  </div>
</header>
