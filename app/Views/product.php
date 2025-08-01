<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Team Start -->
    <div class="container-fluid team pb-5 mt-4">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Produk</h1>
                <p class="mb-0">Temukan berbagai produk terbaik kami yang telah dipilih dengan kualitas dan keunggulan terbaik untuk Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="produk-detail.html" class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/produk1.jpeg" class="img-fluid rounded-top w-100" alt="Produk 1">
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">Produk 1</h4>
                                <p class="mb-0">Deskripsi singkat produk 1</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="produk-detail.html" class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/produk2.jpeg" class="img-fluid rounded-top w-100" alt="Produk 1">
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">Produk 1</h4>
                                <p class="mb-0">Deskripsi singkat produk 1</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="produk-detail.html" class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/produk3.jpeg" class="img-fluid rounded-top w-100" alt="Produk 1">
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">Produk 1</h4>
                                <p class="mb-0">Deskripsi singkat produk 1</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="produk-detail.html" class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/produk4.jpeg" class="img-fluid rounded-top w-100" alt="Produk 1">
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">Produk 1</h4>
                                <p class="mb-0">Deskripsi singkat produk 1</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?= $this->endSection(); ?>