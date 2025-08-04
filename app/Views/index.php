<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <?php foreach ($slider as $index => $slide): ?>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <!-- Kolom kiri: Teks -->
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start <?= $index === 0 ? 'active' : ''; ?>">
                                <h1 class="display-1 text-white mb-4">
                                    <span class="slide-vertical">
                                        <?= ($lang == 'id') ? $slide['caption_slider_id'] : $slide['caption_slider_en']; ?>
                                    </span>
                                </h1>
                            </div>
                        </div>

                        <!-- Kolom kanan: Gambar dari database -->
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img">
                                <img src="<?= base_url('assets/img/' . $slide['foto_slider']) ?>"
                                    class="img-fluid w-100 rounded-circle"
                                    alt="<?= ($lang === 'id') ? $slide['alt_foto_slider_id'] : $slide['alt_foto_slider_en']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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
                    <h1 class="text-primary"><?= $lang == 'id' ? $aboutMeta['nama_halaman_id'] : $aboutMeta['nama_halaman_en']; ?></h1>
                    <h3 class="display-6 mb-2"><?= $lang == 'id' ? $aboutMeta['deskripsi_halaman_id'] : $aboutMeta['deskripsi_halaman_en']; ?></h3>
                    <p class="mb-2"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
                    <div class="d-flex justify-content mb-3">
                        <a href="<?= base_url($lang == 'id' ? 'id/tentang' : 'en/about') ?>" style="text-decoration: underline; color: #015fc9cc;">
                            <?= lang('bahasa.Baca Selengkapnya'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="text-center">
                    <!-- <img src="img/tentang.jpeg" alt="Tumbler Minuma" -->
                    <img src="<?= base_url('assets/img/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>"
                        class="img-fluid rounded shadow-sm"
                        style="max-width: 70%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Start -->
<div class="container-fluid team pb-5 mt-4">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $productMeta['nama_halaman_id'] : $productMeta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $productMeta['deskripsi_halaman_id'] : $productMeta['deskripsi_halaman_en']; ?></p>
        </div>

        <!-- Tombol Lihat Semua di kanan atas -->
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url($lang == 'id' ? 'id/produk' : 'en/product') ?>" style="text-decoration: underline; color: #015fc9cc;">
                <?= lang('bahasa.Lihat Semua'); ?></a>
        </div>
        <div class="row g-4">
            <?php foreach ((array_slice($product, 0, 4)) as $p) : ?>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?= base_url($lang == 'id'
                                    ? 'id/produk/' . $p['slug_id']
                                    : 'en/product/' . $p['slug_en']); ?>" class="text-decoration-none text-dark">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?= base_url('assets/img/' . $p['foto_produk']); ?>" class="img-fluid rounded-top w-100" alt="Produk 1"
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

<!-- Blog Start -->
<div class="container-fluid blog">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $aktivitasMeta['nama_halaman_id'] : $aktivitasMeta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $aktivitasMeta['deskripsi_halaman_id'] : $aktivitasMeta['deskripsi_halaman_en']; ?></p>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= base_url($lang == 'id' ? 'id/aktivitas' : 'en/activity') ?>" style="text-decoration: underline; color: #015fc9cc;">
                <?= lang('bahasa.Lihat Semua'); ?>
            </a>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ((array_slice($aktivitas, 0, 4)) as $aktivitas) : ?>
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


<!-- Artikel Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <!-- Header Halaman -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $articleMeta['nama_halaman_id'] : $articleMeta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $articleMeta['deskripsi_halaman_id'] : $articleMeta['deskripsi_halaman_en']; ?></p>
        </div>

        <!-- Konten Artikel -->
        <div class="row g-5">
            <!-- Artikel Utama -->
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="bg-white rounded shadow-sm overflow-hidden">
                    <img src="<?= base_url('assets/img/' . $article[0]['foto_artikel']); ?>" class="img-fluid w-100" alt="Artikel Utama">
                    <div class="p-4">
                        <h4 class="text-dark"><?= $lang == 'id' ? $article[0]['judul_artikel_id'] : $article[0]['judul_artikel_en']; ?></h4>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2"><?= $lang == 'id' ? $article[0]['nama_kategori'] : $article[0]['nama_kategori']; ?></span>
                        </div>
                        <p>
                            <?= $lang == 'id' ? $article[0]['snippet_id'] : $article[0]['snippet_en']; ?>
                        </p>
                        <div class="d-flex justify-content mb-3">
                            <a href="<?= base_url(
                                            $lang === 'id'
                                                ? 'id/artikel/' . ($article[0]['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article[0]['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                                : 'en/article/' . ($article[0]['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article[0]['slug_artikel_en'] ?? 'article-not-found')
                                        ); ?>" style="text-decoration: underline; color: #015fc9cc;">
                                <?= lang('bahasa.Baca Selengkapnya'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Artikel -->
            <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.4s">
                <div class="bg-white rounded p-3 shadow-sm">
                    <?php if (!empty($sideArtikel)): ?>
                        <?php foreach (array_slice($sideArtikel, 0, 4) as $article): ?>
                        <!-- Artikel Sidebar 1 -->
                        <div class="d-flex mb-4 border-bottom pb-3">
                            <a href="<?= base_url($lang == 'id'
                                            ? 'id/artikel/' . $article['slug_kategori_id'] . '/' . $article['slug_artikel_id']
                                            : 'en/article/' . $article['slug_kategori_en'] . '/' . $article['slug_artikel_en']); ?>">
                                <img src="<?= base_url('assets/img/' . $article['foto_artikel']); ?>" 
                                    alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>" 
                                    class="rounded" 
                                    style="width: 90px; height: 70px; object-fit: cover;">
                            </a>
                            <div class="ms-3">
                                <span class="badge bg-light text-primary mb-1">Tips</span>
                                <a href="detail-artikel-2.html" class="text-dark text-decoration-none">
                                    <h6 class="fw-semibold hover-text-primary mb-1"><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></h6>
                                </a>
                                <p>
                                    <?= implode(' ', array_slice(explode(' ', $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']), 0, 7)) . '...'; ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Tidak ada artikel terkait.</p>
                    <?php endif; ?>
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
            <h1 class="text-primary"><?= $lang == 'id' ? $contactMeta['nama_halaman_id'] : $contactMeta['nama_halaman_en']; ?></h1>
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
                    <h4 class="text-primary mb-3"><?= $lang == 'id' ? $contactMeta['deskripsi_halaman_id'] : $contactMeta['deskripsi_halaman_en']; ?></h4>
                    <p class="mb-0"><?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kontak End -->

<?= $this->endSection(); ?>