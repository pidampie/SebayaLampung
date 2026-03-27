<?php
// view360.php - Halaman untuk menampilkan gambar 360 derajat dari Google
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View 360 | Sebaya Lampung</title>
    <!-- Tailwind CSS CDN -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col items-center justify-center font-serif" style="background: url('assets/img/SigerLampung.jpg') center/cover no-repeat fixed;">
        <!-- Ornamen tapis Lampung atas -->
        <div class="w-full flex justify-center mt-6">
            <svg height="32" viewBox="0 0 400 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="32" fill="#bfa14a"/>
                <path d="M0 32L20 0L40 32L60 0L80 32L100 0L120 32L140 0L160 32L180 0L200 32L220 0L240 32L260 0L280 32L300 0L320 32L340 0L360 32L380 0L400 32" stroke="#7c1c1c" stroke-width="4"/>
            </svg>
        </div>
        <div class="w-full max-w-2xl lampung-card p-8 mt-4 flex flex-col items-center relative">
                <img src="assets/img/logo.jpg" alt="Logo Sebaya Lampung" class="w-24 h-24 rounded-full border-4 lampung-border mb-4 shadow-md">
                <!-- Aksara Lampung dekoratif -->
                <div class="text-2xl mb-1 tracking-widest text-[#bfa14a] font-bold" style="font-family: 'Noto Sans', 'Noto Sans Lampung', serif;">ꦭꦩ꧀ꦥꦸꦁ</div>
                <h2 class="text-3xl lampung-card-title mb-2 tracking-wide font-extrabold">Jelajahi Lampung 360°</h2>
                <p class="lampung-card-desc mb-6 text-center text-base">Lihat keindahan Lampung secara virtual melalui Google Street View di bawah ini.<br><span class="text-[#bfa14a] font-semibold">Tapis, Siger, dan Aksara Lampung</span> menjadi inspirasi desain.</p>
                <!-- Ganti src di bawah dengan link embed Google Street View yang diinginkan -->
                <div class="w-full flex justify-center">
                    <iframe class="w-full h-96 rounded-xl border-2 lampung-border shadow-lg" src="https://www.google.com/maps/embed?pb=!4v1711530000000!6m8!1m7!1stGD2tZBuZ-FAVFEvtfzlaQ!2m2!1d-5.767622!2d105.690926!3f75!4f0!5f0.7820865974627469" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <a href="dashboard.php" class="mt-8 lampung-btn px-6 py-2 text-lg">Kembali ke Dashboard</a>
        </div>
        <!-- Ornamen tapis Lampung bawah -->
        <div class="w-full flex justify-center mb-6">
            <svg height="32" viewBox="0 0 400 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="32" fill="#bfa14a"/>
                <path d="M0 0L20 32L40 0L60 32L80 0L100 32L120 0L140 32L160 0L180 32L200 0L220 32L240 0L260 32L280 0L300 32L320 0L340 32L360 0L380 32L400 0" stroke="#7c1c1c" stroke-width="4"/>
            </svg>
        </div>
</body>
</html>
