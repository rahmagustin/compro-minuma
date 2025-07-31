<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- About Section Start -->
    <div class="container py-5">
        <!-- Judul dan breadcrumb di tengah atas -->
        <div class="text-center mb-5">
            <h1 class="text-primary">Tentang</h1>
        </div>

        <!-- Baris dengan dua kolom -->
        <div class="row align-items-center g-5">
            <!-- Kolom Teks -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h2 class="display-6 mb-3">Teman Setia Aktivitas Harian</h2>
                <p class="mb-3">Minuma hadir sebagai solusi tumbler modern yang ramah lingkungan, tahan lama, dan bergaya. Kami berkomitmen menghadirkan produk yang mendukung gaya hidup aktif dan sehat tanpa mengorbankan estetika maupun fungsionalitas.</p>
                <p class="mb-4">Dengan berbagai pilihan desain dan ukuran, Minuma menjadi pilihan tepat untuk menemani Anda bekerja, bepergian, berolahraga, atau bersantai.</p>
                <ul class="list-unstyled">
                    <li class="text-dark mb-2"><i class="fa fa-check text-primary me-3"></i>Bahan ramah lingkungan & BPA-free</li>
                    <li class="text-dark mb-2"><i class="fa fa-check text-primary me-3"></i>Menjaga suhu panas & dingin lebih lama</li>
                    <li class="text-dark mb-2"><i class="fa fa-check text-primary me-3"></i>Desain elegan dan bisa disesuaikan</li>
                </ul>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="text-center">
                    <img src="img/tentang.jpeg" alt="Tumbler Minuma"
                        class="img-fluid rounded shadow-sm"
                        style="max-width: 70%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

<?= $this->endSection(); ?>