<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Header Artikel -->
<div class="article-header text-center mt-5">
    <div class="container">
        <h1 class="text-primary"><?= $lang == 'id' ? $artikel['judul_artikel_id'] : $artikel['judul_artikel_en']; ?></h1>
        <div class="mb-3">
            <span class="badge bg-primary me-2"><?= $lang == 'id' ? $artikel['nama_kategori_id'] : $artikel['nama_kategori_en']; ?></span>
        </div>
    </div>
</div>

<!-- Konten Artikel dan Sidebar -->
<div class="container my-5">
    <div class="row">
        <!-- Artikel Utama -->
        <div class="col-lg-8 mb-5">
            <img src="<?= base_url('assets/img/' . $artikel['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $artikel['alt_artikel_id'] : $artikel['alt_artikel_en']; ?>" alt="Gambar Artikel" class="img-fluid rounded mb-4">
            <p><?= $lang == 'id' ? $artikel['deskripsi_artikel_id'] : $artikel['deskripsi_artikel_en']; ?></p>
            <hr class="my-4">
            <p class="text-muted">Artikel ini dipublikasikan pada <?= date('d F Y', strtotime($artikel['created_at'])); ?></p>
        </div>

        <!-- Sidebar Artikel Terkait -->
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
    </div>
</div>

<?= $this->endSection(); ?>