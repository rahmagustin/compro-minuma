<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Header Detail Produk -->
    <div class="container-fluid">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-primary" data-wow-delay="0.1s">Detail Produk</h1>
            <p class="fw-normal mb-4 wow fadeInDown" data-wow-delay="0.2s">
                Temukan informasi lengkap dan spesifikasi produk kami yang berkualitas.
            </p>
        </div>
    </div>

    <!-- Konten Detail Produk -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <img src="img/produk1.jpeg" alt="Produk 1" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h3>Tumbler Tosca</h3>
                <p>Produk 1 adalah tumbler ramah lingkungan dengan desain elegan, tahan lama, dan fungsional untuk kebutuhan sehari-hari Anda.</p>
                <ul>
                    <li>Bahan BPA-free</li>
                    <li>Menjaga suhu minuman panas/dingin lebih lama</li>
                    <li>Berbagai pilihan warna dan ukuran</li>
                </ul>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>