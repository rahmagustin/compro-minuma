<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Blog Start -->
    <div class="container-fluid blog">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Aktivitas</h1>
                <p class="mb-0">Jelajahi beragam aktivitas yang telah kami jalankan dengan komitmen dan semangat untuk memberikan manfaat nyata kepada semua.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/aktivitas1.jpeg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Kegiatan Sosial</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Membersihkan Sampah Plastik</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <div class="d-flex justify-content mb-3">
                                <a href="aktivitas-detail.html" style="text-decoration: underline; color: #015fc9cc;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/aktivitas2.jpeg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Pelatihan</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Pelatihan Daur Ulang Sampah</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <div class="d-flex justify-content mb-3">
                                <a href="aktivitas-detail.html" style="text-decoration: underline; color: #015fc9cc;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/aktivitas1.jpeg" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Kegiatan Sosial</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-3">Membersihkan Sampah Plastik</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <div class="d-flex justify-content mb-3">
                                <a href="aktivitas-detail.html" style="text-decoration: underline; color: #015fc9cc;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?= $this->endSection(); ?>