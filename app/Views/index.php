<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <!-- Slide 1 -->
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Minuma</h4>
                                <h1 class="display-1 text-white mb-4">
                                    <span class="slide-vertical">Selalu Siap Temani <span class="text-warning">Harimu</span></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img">
                                <img src="img/botol1.jpeg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Minuma</h4>
                                <h1 class="display-1 text-white mb-4">
                                    <span class="slide-vertical">Selalu Siap Temani <span class="text-warning">Harimu</span></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img">
                                <img src="img/botol2.jpeg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To Minuma</h4>
                                <h1 class="display-1 text-white mb-4">
                                    <span class="slide-vertical">Selalu Siap Temani <span class="text-warning">Harimu</span></span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img">
                                <img src="img/botol3.jpeg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Warna kuning bootstrap */
        .text-warning {
            color: #ffc107 !important;
        }

        /* Animasi slide naik turun untuk seluruh kalimat */
        .slide-vertical {
            display: inline-block;
            animation: slideUpDown 3s ease-in-out infinite;
            position: relative;
            top: 0;
        }

        @keyframes slideUpDown {

            0%,
            100% {
                top: 0;
            }

            50% {
                top: -15px;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".header-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
                smartSpeed: 1000,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn'
            });
        });
    </script>
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <!-- Kolom Teks -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="pb-3">
                        <h1 class="text-primary">Tentang</h1>
                        <h3 class="display-6 mb-2">Teman Setia Aktivitas Harian</h3>
                        <p class="mb-2">Minuma hadir sebagai solusi tumbler modern yang ramah lingkungan, tahan lama, dan bergaya. Kami berkomitmen menghadirkan produk yang mendukung gaya hidup aktif dan sehat tanpa mengorbankan estetika maupun fungsionalitas...</p>
                        <div class="d-flex justify-content mb-3">
                            <a href="about.html" style="text-decoration: underline; color: #015fc9cc;">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kolom Gambar -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="text-center">
                        <img src="img/tentang.jpeg" alt="Tumbler Minuma"
                            class="img-fluid rounded shadow-sm"
                            style="max-width: 70%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid team pb-5 mt-4">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Produk</h1>
                <p class="mb-0">Temukan berbagai produk terbaik kami yang telah dipilih dengan kualitas dan keunggulan terbaik untuk Anda.</p>
            </div>

            <!-- Tombol Lihat Semua di kanan atas -->
            <div class="d-flex justify-content-end mb-3">
                <a href="produk.html" style="text-decoration: underline; color: #015fc9cc;">
                    Lihat Selengkapnya
                </a>
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

    <!-- Blog Start -->
    <div class="container-fluid blog">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Aktivitas</h1>
                <p class="mb-0">Jelajahi beragam aktivitas yang telah kami jalankan dengan komitmen dan semangat untuk memberikan manfaat nyata kepada semua.</p>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <a href="aktivitas.html" style="text-decoration: underline; color: #015fc9cc;">
                    Lihat Selengkapnya
                </a>
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


    <!-- Artikel Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <!-- Header Halaman -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Artikel</h1>
                <p class="mb-0">Dapatkan wawasan seputar gaya hidup sehat, lingkungan, dan tips penggunaan tumbler dari tim Minuma.</p>
            </div>

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

                <!-- Side Artikel -->
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

    <!-- Kontak Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Judul dan Deskripsi Halaman -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="text-primary">Kontak</h1>
                <p class="mb-0">Kami siap membantu Anda. Jika memiliki pertanyaan seputar produk, pemesanan, atau kemitraan, silakan hubungi kami melalui informasi berikut atau langsung kunjungi lokasi kami.</p>
            </div>

            <!-- Konten Kontak -->
            <div class="row g-4">
                <!-- Google Maps -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="rounded overflow-hidden shadow-sm h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7902.476589686967!2d112.6656591032361!3d-7.974306103641419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1753841591897!5m2!1sen!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Card Kontak -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="bg-light p-5 rounded shadow-sm h-100">
                        <h4 class="text-primary mb-3">Informasi Kontak</h4>
                        <p><i class="fas fa-map-marker-alt text-primary me-2"></i> Jl. Contoh No. 123, Surabaya, Indonesia</p>
                        <p><i class="fas fa-envelope text-primary me-2"></i> support@minuma.com</p>
                        <p><i class="fas fa-phone-alt text-primary me-2"></i> +62 812 3456 7890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak End -->

<?= $this->endSection(); ?>