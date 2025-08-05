<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

$current_url = uri_string();

// Ambil query string (misalnya ?keyword=sukses)
$query_string = $_SERVER['QUERY_STRING'] ?? ''; // Pastikan tidak ada error jika query string kosong

// Simpan segmen bahasa saat ini
$segments = explode('/', $current_url);
$lang_segment = $segments[0] ?? ''; // Ambil segmen pertama dari URL

// Pastikan hanya 'en' atau 'id' yang dianggap sebagai segmen bahasa
if ($lang_segment !== 'en' && $lang_segment !== 'id') {
    $lang_segment = 'id'; // Default ke 'id' jika segmen bahasa tidak ada
}

// Definisikan tautan untuk setiap halaman berdasarkan bahasa
$homeLink    = ($lang_segment === 'en') ? '/' : '/';
$aboutLink   = ($lang_segment === 'en') ? 'about' : 'tentang';
$contactLink = ($lang_segment === 'en') ? 'contact' : 'kontak';
$articleLink = ($lang_segment === 'en') ? 'article' : 'artikel';
$activityLink = ($lang_segment === 'en') ? 'activity' : 'aktivitas';
$productLink = ($lang_segment === 'en') ? 'product' : 'produk';

// Ambil bagian dari URL tanpa segmen bahasa
array_shift($segments); // Hapus segmen bahasa dari array
$url_without_lang = implode('/', $segments); // Gabungkan kembali sisa URL

// Tentukan bahasa yang ingin digunakan
$new_lang = ($lang_segment === 'en') ? 'id' : 'en';

// Mapping penggantian segmen dalam URL berdasarkan bahasa yang aktif
$replace_map = [
    'tentang' => 'about',
    'kontak' => 'contact',
    'artikel' => 'article',
    'aktivitas' => 'activity',
    'produk' => 'product',
];

foreach ($replace_map as $id => $en) {
    if ($lang_segment === 'en') {
        // Jika bahasa saat ini 'en', ubah ke 'id'
        $url_without_lang = str_replace($en, $id, $url_without_lang);
    } else {
        // Jika bahasa saat ini 'id', ubah ke 'en'
        $url_without_lang = str_replace($id, $en, $url_without_lang);
    }
}

// Buat URL yang bersih
$clean_url = ($url_without_lang !== '') ? "$new_lang/$url_without_lang" : $new_lang;

// Gabungkan query string jika ada
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}

// Tautan Bahasa Inggris & Indonesia
$english_url = base_url($clean_url);
$indonesia_url = base_url($clean_url);

// Tautan Kategori Artikel untuk Navbar
$categoryLinks = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $categoryLinks[] = [
            'url' => base_url("$lang/$articleLink/$slug"),
            'name' => $name
        ];
    }
}

// Tautan Kategori Aktivitas untuk Navbar
$kategoriAktivitasLinks = [];
if (!empty($categoriesAktivitas)) {
    foreach ($categoriesAktivitas as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $kategoriAktivitasLinks[] = [
            'url' => base_url("$lang/$activityLink/$slug"),
            'name' => $name
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php if (isset($metaCategory)): ?>
        <title><?= $lang == 'id' ? $metaCategory['title_id'] : $metaCategory['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $metaCategory['meta_desc_id'] : $metaCategory['meta_desc_en']; ?>">
    <?php else: ?>
        <title><?= $lang == 'id' ? $meta['title_id'] : $meta['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $meta['meta_desc_id'] : $meta['meta_desc_en']; ?>">
    <?php endif; ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="../assets/lib/animate/animate.min.css" />
    <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Minuma</h1>
                </a> -->
                <a class="navbar-brand d-flex align-items-center" href="<?= base_url($lang . '/') ?>">
                    <img src="<?= base_url('assets/img/' . $profil['logo_perusahaan']); ?>" alt="<?= $profil['nama_perusahaan']; ?>" width="40" height="40" class="me-2">
                    <h1 class="text-primary mb-0 d-inline-block"><?= $profil['nama_perusahaan']; ?></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="<?= base_url($lang . '/') ?>"
                            class="nav-item nav-link <?= isset($activeMenu) && $activeMenu === 'home' ? 'active' : '' ?>">
                            <?= lang('bahasa.Beranda'); ?>
                        </a>
                        <a href="<?= base_url($lang . '/' . $aboutLink) ?>"
                            class="nav-item nav-link <?= isset($activeMenu) && $activeMenu === 'about' ? 'active' : '' ?>">
                            <?= lang('bahasa.Tentang'); ?>
                        </a>
                        <a href="<?= base_url($lang . '/' . $productLink) ?>"
                            class="nav-item nav-link <?= isset($activeMenu) && $activeMenu === 'product' ? 'active' : '' ?>">
                            <?= lang('bahasa.Produk'); ?>
                        </a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= (uri_string() === 'activity' || str_contains(uri_string(), 'activity')) ? 'active' : '' ?>"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= lang('bahasa.Aktivitas'); ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url($lang . '/' . $activityLink) ?>">
                                    <?= $lang == 'id' ? 'Semua Aktivitas' : 'All Activity'; ?>
                                </a>

                                <?php if (!empty($kategoriAktivitasLinks)): ?>
                                    <?php foreach ($kategoriAktivitasLinks as $kategoriAktivitasLink): ?>
                                        <a class="dropdown-item" href="<?= $kategoriAktivitasLink['url']; ?>">
                                            <?= $kategoriAktivitasLink['name']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <a class="dropdown-item"><?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= (uri_string() === 'article' || str_contains(uri_string(), 'article')) ? 'active' : '' ?>"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= lang('bahasa.Artikel'); ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url($lang . '/' . $articleLink) ?>">
                                    <?= $lang == 'id' ? 'Semua Artikel' : 'All Article'; ?>
                                </a>

                                <?php if (!empty($categoryLinks)): ?>
                                    <?php foreach ($categoryLinks as $categoryLink): ?>
                                        <a class="dropdown-item" href="<?= $categoryLink['url']; ?>">
                                            <?= $categoryLink['name']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <a class="dropdown-item">
                                        <?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a href="<?= base_url($lang . '/' . $contactLink) ?>"
                            class="nav-item nav-link <?= isset($activeMenu) && $activeMenu === 'contact' ? 'active' : '' ?>">
                            <?= lang('bahasa.Kontak'); ?>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <?= ($lang === 'en') ? 'English' : 'Indonesia'; ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item <?= $lang === 'id' ? 'active disabled' : ''; ?>" href="<?= $indonesia_url; ?>">
                                        <img src="https://flagcdn.com/w40/id.png" width="20" class="me-2" alt="ID Flag"> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item <?= $lang === 'en' ? 'active disabled' : ''; ?>" href="<?= $english_url; ?>">
                                        <img src="https://flagcdn.com/w40/gb.png" width="20" class="me-2" alt="UK Flag"> English
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Tautan Berguna -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"><?= lang('bahasa.headerLink'); ?></h4>
                        <a href="<?= base_url($lang . '/' . $homeLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'home' ? 'active' : '' ?>" style="color: white; text-decoration: none;">
                            <i class="fas fa-angle-right me-2"></i><?= lang('bahasa.Beranda'); ?>
                        </a>
                        <a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $aboutLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'about' ? 'active' : '' ?>">
                            <i class="fas fa-angle-right me-2"></i><?= lang('bahasa.Tentang'); ?>
                        </a>
                        <a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $productLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'product' ? 'active' : '' ?>">
                            <i class="fas fa-angle-right me-2"></i><?= lang('bahasa.Produk'); ?>
                        </a>
                        <a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $articleLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'article' ? 'active' : '' ?>">
                            <i class="fas fa-angle-right me-2"></i><?= lang('bahasa.Artikel'); ?>
                        </a>
                        <a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $contactLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'contact' ? 'active' : '' ?>">
                            <i class="fas fa-angle-right me-2"></i><?= lang('bahasa.Kontak'); ?>
                        </a>
                    </div>
                </div>

                <!-- Artikel Kami -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"><?= lang('bahasa.headerService'); ?></h4>
                        <ul class="list-unstyled">
                            <?php if (!empty($kategori_teratas) && is_array($kategori_teratas)): ?>
                                <?php foreach ($kategori_teratas as $kategori): ?>
                                    <li>
                                        <a style="color: white; text-decoration: none;" href="<?= base_url("id/artikel/" . $kategori['slug_kategori_id']) ?>">
                                            <?= $kategori['nama_kategori_id']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>No categories available</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- Sosial Media -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"><?= lang('bahasa.sosmedLink'); ?></h4>
                        <ul class="list-unstyled">
                            <?php if (!empty($sosmed) && is_array($sosmed)): ?>
                                <?php foreach ($sosmed as $s): ?>
                                    <li>
                                        <a style="color: white; text-decoration: none;" href="<?= $s['link_sosmed']; ?>" target="_blank">
                                            <img src="<?= base_url('assets/img/logo/' . $s['logo_sosmed']); ?>" alt="<?= $s['nama_sosmed']; ?>" style="width: 20px; height: 20px; margin-right: 5px;">
                                            <?= $s['nama_sosmed']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>No social media available</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- Marketplace -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4"><?= lang('bahasa.marketplaceLink'); ?></h4>
                        <ul class="list-unstyled">
                            <?php if (!empty($marketplace) && is_array($marketplace)): ?>
                                <?php foreach ($marketplace as $s): ?>
                                    <li>
                                        <a style="color: white; text-decoration: none;" href="<?= $s['link_marketplace']; ?>" target="_blank">
                                            <img src="<?= base_url('assets/img/logo/' . $s['logo_marketplace']); ?>" alt="<?= $s['nama_marketplace']; ?>" style="width: 20px; height: 20px; margin-right: 5px;">
                                            <?= $s['nama_marketplace']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>No social media available</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <span class="text-body d-block mb-2">
                        <a href="#" class="border-bottom text-white">
                            <i class="fas fa-copyright text-light me-2"></i>Minuma
                        </a>, All right reserved.
                    </span>
                    <span class="text-body">
                        Designed by <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> |
                        Distributed by <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/counterup/counterup.min.js"></script>
    <script src="../assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>