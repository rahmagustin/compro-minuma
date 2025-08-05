<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Blog Start -->
<div class="container-fluid blog">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($allAktivitas as $aktivitas) : ?>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?= base_url(
                                    $lang == 'id'
                                        ? 'id/aktivitas/' . (!empty($aktivitas['slug_kategori_id']) ? $aktivitas['slug_kategori_id'] : 'kategori-tidak-ditemukan') . '/' . (!empty($aktivitas['slug_aktivitas_id']) ? $aktivitas['slug_aktivitas_id'] : 'aktivitas-tidak-ditemukan')
                                        : 'en/activity/' . (!empty($aktivitas['slug_kategori_en']) ? $aktivitas['slug_kategori_en'] : 'category-not-found') . '/' . (!empty($aktivitas['slug_aktivitas_en']) ? $aktivitas['slug_aktivitas_en'] : 'activity-not-found')
                                ); ?>" style="text-decoration: none; color: inherit;">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/img/' . $aktivitas["foto_aktivitas"]) ?>" class="img-fluid rounded-top w-100"
                                    alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>">
                            </div>
                            <div class="blog-content p-4">
                                <h5 class="text-center activityname">
                                    <?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Blog End -->

<?= $this->endSection(); ?>