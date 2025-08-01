<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Blog Start -->
    <div class="container-fluid blog bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Artikel</h1>
                <p class="mb-0">Dapatkan wawasan seputar gaya hidup sehat, lingkungan, dan tips penggunaan tumbler dari tim Minuma.</p>
            </div>
            <!-- Artikel Start -->
            <div class="container-fluid bg-light py-5">
                <div class="container py-5">
                    <!-- Header Halaman -->

                    <!-- Konten Artikel -->
                    <div class="row g-5">
                        <!-- Artikel Utama -->
                        <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="bg-white rounded shadow-sm overflow-hidden">
                                <img src="img/artikel.jpeg" class="img-fluid w-100" alt="Artikel Utama">
                                <div class="p-4">
                                    <h4 class="text-dark">5 Alasan Mengapa Kamu Harus Pakai Tumbler Setiap Hari</h4>
                                    <div class="mb-3">
                                        <span class="badge bg-primary me-2">Gaya Hidup</span>
                                        <small class="text-muted">27 Juli 2025</small>
                                    </div>
                                    <p>
                                        Menggunakan tumbler dalam aktivitas harian tidak hanya membuatmu lebih praktis, tapi juga membantu mengurangi sampah plastik. Berikut lima alasan penting mengapa kamu sebaiknya mulai beralih ke tumbler...
                                    </p>
                                    <div class="d-flex justify-content mb-3">
                                        <a href="artikel-detail.html" style="text-decoration: underline; color: #015fc9cc;">
                                            Baca Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="bg-white rounded p-4 shadow-sm">
                                <h5 class="mb-4 border-bottom pb-2">Artikel Lainnya</h5>

                                <!-- Artikel Sidebar 1 -->
                                <div class="d-flex mb-4 border-bottom pb-3">
                                    <a href="detail-artikel-2.html">
                                        <img src="img/artikel.jpeg" alt="Artikel 1" class="rounded" style="width: 90px; height: 70px; object-fit: cover;">
                                    </a>
                                    <div class="ms-3">
                                        <span class="badge bg-light text-primary mb-1">Tips</span>
                                        <a href="detail-artikel-2.html" class="text-dark text-decoration-none">
                                            <h6 class="fw-semibold hover-text-primary mb-1">Cara Merawat Tumbler Agar Awet</h6>
                                        </a>
                                        <small class="text-muted d-block">25 Juli 2025</small>
                                    </div>
                                </div>

                                <!-- Artikel Sidebar 2 -->
                                <div class="d-flex mb-4 border-bottom pb-3">
                                    <a href="detail-artikel-3.html">
                                        <img src="img/artikel.jpeg" alt="Artikel 2" class="rounded" style="width: 90px; height: 70px; object-fit: cover;">
                                    </a>
                                    <div class="ms-3">
                                        <span class="badge bg-light text-success mb-1">Edukasi</span>
                                        <a href="detail-artikel-3.html" class="text-dark text-decoration-none">
                                            <h6 class="fw-semibold hover-text-primary mb-1">Tumbler VS Botol Plastik Sekali Pakai</h6>
                                        </a>
                                        <small class="text-muted d-block">24 Juli 2025</small>
                                    </div>
                                </div>

                                <!-- Artikel Sidebar 3 -->
                                <div class="d-flex mb-4 border-bottom pb-3">
                                    <a href="detail-artikel-4.html">
                                        <img src="img/artikel.jpeg" alt="Artikel 3" class="rounded" style="width: 90px; height: 70px; object-fit: cover;">
                                    </a>
                                    <div class="ms-3">
                                        <span class="badge bg-light text-warning mb-1">Panduan</span>
                                        <a href="detail-artikel-4.html" class="text-dark text-decoration-none">
                                            <h6 class="fw-semibold hover-text-primary mb-1">Tips Membersihkan Tumbler Stainless</h6>
                                        </a>
                                        <small class="text-muted d-block">22 Juli 2025</small>
                                    </div>
                                </div>

                                <!-- Artikel Sidebar 4 -->
                                <div class="d-flex">
                                    <a href="detail-artikel-5.html">
                                        <img src="img/artikel.jpeg" alt="Artikel 4" class="rounded" style="width: 90px; height: 70px; object-fit: cover;">
                                    </a>
                                    <div class="ms-3">
                                        <span class="badge bg-light text-danger mb-1">Info Produk</span>
                                        <a href="detail-artikel-5.html" class="text-dark text-decoration-none">
                                            <h6 class="fw-semibold hover-text-primary mb-1">Kenapa Minuma Jadi Pilihan Terbaik?</h6>
                                        </a>
                                        <small class="text-muted d-block">20 Juli 2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Artikel End -->
        </div>
    </div>
    <!-- Blog End -->

<?= $this->endSection(); ?>