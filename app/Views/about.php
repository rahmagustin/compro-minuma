<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- About Section Start -->
    <div class="container py-5">
        <!-- Judul dan breadcrumb di tengah atas -->
        <div class="text-center mb-5">
            <h1 class="text-primary"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h1>
        </div>

        <!-- Baris dengan dua kolom -->
        <div class="row align-items-center g-5">
            <!-- Kolom Teks -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h2 class="display-6 mb-3"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h2>
                <p class="mb-2"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="text-center">
                    <img src="<?= base_url('assets/img/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>"
                        class="img-fluid rounded shadow-sm"
                        style="max-width: 70%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

<?= $this->endSection(); ?>