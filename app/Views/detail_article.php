<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Header Artikel -->
    <div class="article-header text-center mt-5">
        <div class="container">
            <h1 class="text-primary">5 Alasan Mengapa Kamu Harus Pakai Tumbler Setiap Hari</h1>
        </div>
    </div>

    <!-- Konten Artikel dan Sidebar -->
    <div class="container my-5">
        <div class="row">
            <!-- Artikel Utama -->
            <div class="col-lg-8 mb-5">
                <img src="img/artikel.jpeg" alt="Gambar Artikel" class="img-fluid rounded mb-4">
                <p>Menggunakan tumbler dalam aktivitas harian bukan hanya membuatmu terlihat lebih stylish, tapi juga membantu menyelamatkan lingkungan. Di tengah isu perubahan iklim dan peningkatan limbah plastik, membawa tumbler menjadi langkah kecil yang berdampak besar.</p>

                <h2>Kenapa Tumbler Penting?</h2>
                <p>Berikut adalah lima alasan mengapa kamu sebaiknya mulai menggunakan tumbler setiap hari:</p>
                <ol>
                    <li><strong>Ramah Lingkungan:</strong> Tumbler membantu mengurangi limbah plastik dari botol air sekali pakai.</li>
                    <li><strong>Lebih Hemat:</strong> Tidak perlu terus membeli air kemasan, cukup isi ulang dari rumah atau refill station.</li>
                    <li><strong>Lebih Higienis:</strong> Kamu tahu persis siapa yang menggunakan tumbler itu dan bagaimana kebersihannya.</li>
                    <li><strong>Gaya Hidup Sehat:</strong> Membawa tumbler bisa jadi pengingat untuk cukup minum air setiap hari.</li>
                    <li><strong>Desain Menarik:</strong> Banyak tumbler sekarang yang stylish dan bisa disesuaikan dengan kepribadianmu.</li>
                </ol>

                <h3>Kesimpulan</h3>
                <p>Menggunakan tumbler bukan hanya trend, tapi bentuk komitmen terhadap diri sendiri dan lingkungan. Ayo mulai sekarang dan jadi bagian dari perubahan baik!</p>

                <hr class="my-4">
                <p class="text-muted">Artikel ini dipublikasikan pada 27 Juli 2025.</p>
            </div>

            <!-- Sidebar Artikel Terkait -->
            <div class="col-lg-4">
                <h4 class="mb-4">Artikel Terkait</h4>

                <!-- Artikel Terkait 1 -->
                <div class="d-flex mb-3">
                    <a href="detail-artikel-2.html">
                        <img src="img/artikel.jpeg" alt="Terkait 1" class="rounded" style="width: 100px; height: 70px; object-fit: cover;">
                    </a>
                    <div class="ms-3">
                        <a href="detail-artikel-2.html" class="text-dark fw-semibold text-decoration-none">
                            Cara Merawat Tumbler Agar Awet
                        </a>
                        <br>
                        <small class="text-muted">25 Juli 2025</small>
                    </div>
                </div>

                <!-- Artikel Terkait 2 -->
                <div class="d-flex mb-3">
                    <a href="detail-artikel-3.html">
                        <img src="img/artikel.jpeg" alt="Terkait 2" class="rounded" style="width: 100px; height: 70px; object-fit: cover;">
                    </a>
                    <div class="ms-3">
                        <a href="detail-artikel-3.html" class="text-dark fw-semibold text-decoration-none">
                            Tumbler VS Botol Plastik Sekali Pakai
                        </a>
                        <br>
                        <small class="text-muted">24 Juli 2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>