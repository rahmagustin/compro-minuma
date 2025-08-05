<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Header Detail Produk -->
    <!-- <div class="container-fluid">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-primary" data-wow-delay="0.1s">Detail Produk</h1>
            <p class="fw-normal mb-4 wow fadeInDown" data-wow-delay="0.2s">
                Temukan informasi lengkap dan spesifikasi produk kami yang berkualitas.
            </p>
        </div>
    </div> -->

    <!-- Konten Detail Produk -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <img src="<?= base_url('assets/img/' . $product["foto_produk"]) ?>" 
                    alt="<?= $lang == 'id' ? $product['alt_produk_id'] : $product['alt_produk_en']; ?>" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h3><?= $lang == 'id' ? $product['nama_produk_id'] : $product['nama_produk_en']; ?></h3>
                <p><?= $lang == 'id' ? $product['deskripsi_produk_id'] : $product['deskripsi_produk_en']; ?></p>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>