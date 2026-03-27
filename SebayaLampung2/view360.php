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
                <div class="text-2xl mb-1 tracking-widest text-[#bfa14a] font-bold" style="font-family: 'Noto Sans', 'Noto Sans Lampung', serif;">ꤶꥍꤷꥒꤸꥍꤺ</div>
                <h2 class="text-3xl lampung-card-title mb-2 tracking-wide font-extrabold">Jelajahi Lampung 360°</h2>
                <p class="lampung-card-desc mb-6 text-center text-base">Lihat keindahan Lampung secara virtual melalui Google Street View di bawah ini.<br><span class="text-[#bfa14a] font-semibold">Tapis, Siger, dan Aksara Lampung</span> menjadi inspirasi desain.</p>
                                <!-- Slider View 360 -->
                                <div class="w-full flex flex-col items-center">
                                        <div class="w-full flex justify-center mb-4">
                                                <button id="prev360" class="lampung-btn px-4 py-1 mx-2">&#8592; Sebelumnya</button>
                                                <span id="view360-title" class="text-lg font-bold text-[#bfa14a] mx-2"></span>
                                                <button id="next360" class="lampung-btn px-4 py-1 mx-2">Berikutnya &#8594;</button>
                                        </div>
                                        <iframe id="view360-iframe" class="w-full h-96 rounded-xl border-2 lampung-border shadow-lg" src="" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <script src="assets/js/app.js"></script>
                                <script>
                                // Daftar lokasi 360
                                const view360Data = [
                                    {
                                        title: "Monumen Krakatau",
                                        src: "https://www.google.com/maps/embed?pb=!4v1774595226792!6m8!1m7!1s_UjqOx844YpiWyJi_ieLzg!2m2!1d-5.445573764978793!2d105.2621430211276!3f341.16579632669493!4f5.234620030153707!5f0.4000000000000002"
                                    },
                                    {
                                        title: "Menara Siger Lampung",
                                        src: "https://www.google.com/maps/embed?pb=!4v1774594908121!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJRDhzOEhzS0E.!2m2!1d-5.865500669479609!2d105.7497281776054!3f331.935757338619!4f-14.084544309907926!5f0.7820865974627469"
                                    },
                                    {
                                        title: "Danau Ranau",
                                        src: "https://www.google.com/maps/embed?pb=!4v1774594807085!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJRFUtTUdyREE.!2m2!1d-4.851027128549077!2d103.9376020799148!3f233.14602056529284!4f-5.265547329917069!5f0.7820865974627469"
                                    },
                                    {
                                        title: "Way Kambas",
                                        src: "https://www.google.com/maps/embed?pb=!4v1711530000000!6m8!1m7!1sCAoSLEFGMVFpcE1kQ2Z6b2Z2b2Z2b2Z2b2Z2b2Z2b2Z2b2Z2b2Z2b2Z2b2Z2!2m2!1d-5.055!2d105.633!3f0!4f0!5f0.7820865974627469"
                                    },
                                    {
                                        title: "Museum Lampung",
                                        src: "https://www.google.com/maps/embed?pb=!4v1774594669990!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJQ0U2TnFiZFE.!2m2!1d-5.37258436701421!2d105.2406767765532!3f188.2650633364942!4f-9.232964151733114!5f0.7820865974627469"
                                    }
                                ];
                                let current360 = 0;
                                function updateView360() {
                                    document.getElementById('view360-iframe').src = view360Data[current360].src;
                                    document.getElementById('view360-title').textContent = view360Data[current360].title;
                                }
                                document.getElementById('prev360').onclick = function() {
                                    current360 = (current360 - 1 + view360Data.length) % view360Data.length;
                                    updateView360();
                                };
                                document.getElementById('next360').onclick = function() {
                                    current360 = (current360 + 1) % view360Data.length;
                                    updateView360();
                                };
                                // Inisialisasi pertama
                                updateView360();
                                </script>
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
