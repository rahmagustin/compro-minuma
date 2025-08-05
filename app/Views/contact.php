<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <!-- Kontak Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Judul dan Deskripsi Halaman -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="text-primary"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h1>
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
                        <h4 class="text-primary mb-3"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h4>
                        <p><?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak End -->

<?= $this->endSection(); ?>