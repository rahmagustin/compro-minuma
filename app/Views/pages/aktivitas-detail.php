<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Detail Artikel Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Konten Utama Artikel -->
            <div class="col-lg-8">
                <div class="mb-5">
                    <h1 class="mb-4 text-primary">Membersihkan Sampah Plastik</h1>
                    <img src="img/aktivitas1.jpeg" alt="Gambar Artikel" class="img-fluid rounded mb-4">
                    <div class="mb-3 text-muted small">
                        <span>Kegiatan Sosial</span>
                    </div>
                    <p>
                        Kegiatan membersihkan sampah plastik yang diadakan oleh komunitas Minuma sukses dilaksanakan di pesisir pantai selatan.
                        Ratusan relawan turut berpartisipasi dalam mengumpulkan sampah plastik demi menjaga kebersihan laut dan mendukung gerakan lingkungan berkelanjutan.
                    </p>
                    <p>
                        Kegiatan ini tidak hanya berdampak pada lingkungan, tetapi juga membangun kesadaran masyarakat sekitar tentang pentingnya mengurangi penggunaan plastik sekali pakai.
                    </p>
                </div>
            </div>

            <!-- Sidebar Artikel Terkait -->
            <div class="col-lg-4">
                <div class="mb-5">
                    <h4 class="text-primary mb-4">Artikel Terkait</h4>
                    <div class="d-flex mb-3">
                        <img src="img/aktivitas2.jpeg" class="flex-shrink-0 rounded" alt="" style="width: 100px; height: 70px; object-fit: cover;">
                        <div class="ms-3">
                            <a href="#" class="h6 d-block mb-1 text-dark">Pelatihan Daur Ulang Sampah</a>
                            <small>Pelatihan</small>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/aktivitas1.jpeg" class="flex-shrink-0 rounded" alt="" style="width: 100px; height: 70px; object-fit: cover;">
                        <div class="ms-3">
                            <a href="#" class="h6 d-block mb-1 text-dark">Aksi Hijau Bersama Komunitas</a>
                            <small>Kegiatan Sosial</small>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="img/aktivitas2.jpeg" class="flex-shrink-0 rounded" alt="" style="width: 100px; height: 70px; object-fit: cover;">
                        <div class="ms-3">
                            <a href="#" class="h6 d-block mb-1 text-dark">Kampanye Kurangi Plastik</a>
                            <small>Pelatihan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Artikel End -->
     
<?= $this->endSection(); ?>