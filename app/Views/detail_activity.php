<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Detail Artikel Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Konten Utama Artikel -->
            <div class="col-lg-12">
                <div class="mb-5">
                    <h1 class="mb-4 text-primary"><?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?></h1>
                    <img src="<?= base_url('assets/img/' . $aktivitas['foto_aktivitas']); ?>" alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>" alt="Gambar Artikel" class="img-fluid rounded mb-4">
                    <div class="mb-3 text-muted small">
                        <span class="badge bg-primary me-2"><?= $lang == 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en']; ?></span>
                    </div>
                    <p>
                        <?= $lang == 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en']; ?>
                    </p>
                </div>
            </div>

            <!-- Sidebar Artikel Terkait -->
            <!-- <div class="col-lg-4">
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
            </div> -->
        </div>
    </div>
    <!-- Detail Artikel End -->
     
<?= $this->endSection(); ?>