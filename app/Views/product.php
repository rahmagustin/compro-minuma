<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Team Start -->
<div class="container-fluid team pb-5 mt-4">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
        </div>
        <div class="row g-4">
            <?php foreach ($product as $p) : ?>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?= base_url($lang == 'id'
                                    ? 'id/produk/' . $p['slug_id']
                                    : 'en/product/' . $p['slug_en']); ?>"
                        class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/' . $p['foto_produk']); ?>"
                                    class="img-fluid rounded-top w-100"
                                    alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>">
                            </div>
                            <div class="team-title p-4">
                                <h5 class="mb-0" style="color: white;"><?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->

<?= $this->endSection(); ?>