<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Blog Start -->
<div class="container-fluid blog bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h1>
            <p class="mb-0"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></p>
        </div>

        <!-- Artikel Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <?php foreach (array_slice($allArticle, 0, 1) as $mainArticle) : ?>
                        <!-- Artikel Utama -->
                        <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="bg-white rounded shadow-sm overflow-hidden">
                                <img src="<?= base_url('assets/img/' . $mainArticle['foto_artikel']); ?>" class="img-fluid w-100"
                                    alt="<?= $lang == 'id' ? $mainArticle['alt_artikel_id'] : $mainArticle['alt_artikel_en']; ?>">
                                <div class="p-4">
                                    <h4 class="text-dark"><?= $lang == 'id' ? $mainArticle['judul_artikel_id'] : $mainArticle['judul_artikel_en']; ?></h4>
                                    <div class="mb-3">
                                        <span class="badge bg-primary me-2"><?= $mainArticle['nama_kategori']; ?></span>
                                    </div>
                                    <p><?= $lang == 'id' ? $mainArticle['snippet_id'] : $mainArticle['snippet_en']; ?></p>
                                    <div class="d-flex justify-content mb-3">
                                        <a href="<?= base_url(
                                            $lang === 'id'
                                                ? 'id/artikel/' . ($mainArticle['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($mainArticle['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                                : 'en/article/' . ($mainArticle['slug_kategori_en'] ?? 'category-not-found') . '/' . ($mainArticle['slug_artikel_en'] ?? 'article-not-found')
                                        ); ?>" style="text-decoration: underline; color: #015fc9cc;">
                                            Baca Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Artikel Lainnya -->
                        <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="bg-white rounded p-4 shadow-sm">
                                <h5 class="mb-4 border-bottom pb-2"><?= $lang == 'id' ? 'Artikel Lainnya' : 'Related Articles'; ?></h5>
                                <?php if (!empty($sideArticle)) : ?>
                                    <?php foreach ($sideArticle as $side) : ?>
                                        <div class="d-flex mb-4 border-bottom pb-3">
                                            <a href="<?= base_url($lang == 'id'
                                                ? 'id/artikel/' . $side['slug_kategori_id'] . '/' . $side['slug_artikel_id']
                                                : 'en/article/' . $side['slug_kategori_en'] . '/' . $side['slug_artikel_en']); ?>">
                                                <img src="<?= base_url('assets/img/' . $side['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $side['alt_artikel_id'] : $side['alt_artikel_en']; ?>" class="rounded" style="width: 90px; height: 70px; object-fit: cover;">
                                            </a>
                                            <div class="ms-3">
                                                <a href="#" class="text-dark text-decoration-none">
                                                    <h6 class="fw-semibold hover-text-primary mb-1"><?= $lang == 'id' ? $side['judul_artikel_id'] : $side['judul_artikel_en']; ?></h6>
                                                </a>
                                                <p><?= implode(' ', array_slice(explode(' ', $lang == 'id' ? $side['snippet_id'] : $side['snippet_en']), 0, 7)) . '...'; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <p class="text-muted"><?= $lang == 'id' ? 'Tidak ada artikel lain.' : 'No related articles.'; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Artikel End -->
    </div>
</div>
<!-- Blog End -->

<?= $this->endSection(); ?>