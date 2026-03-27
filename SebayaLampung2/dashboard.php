<?php include 'partials/auth_check.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="main-page">


<?php include 'partials/header.php'; ?>


<main class="content">
  <h1>Pilih Level Pembelajaran</h1>
  <p>Mulai perjalanan budaya Lampung Anda</p>

  <div class="progress-box">
    <span>0/4 Level Selesai</span>
    <div class="progress-bar"></div>
  </div>

  <div class="levels">
    <div class="card green">Level 1<br><small>Pengenalan Dasar</small></div>
    <div class="card blue">Level 2<br><small>Visual & Audio</small></div>
    <div class="card purple">Level 3<br><small>Immersif</small></div>
    <div class="card orange">Level 4<br><small>Pendalaman Budaya</small></div>
  </div>
</main>

<?php include 'partials/footer.php'; ?>
</body>
</html>
