<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Minuma - Selalu Siap Temani Harimu</title>
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Minuma</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link">Beranda</a>
                        <a href="about.html" class="nav-item nav-link active">Tentang</a>
                        <a href="produk.html" class="nav-item nav-link">Produk</a>
                        <div class="nav-item dropdown">
                            <a href="aktivitas.html" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Aktivitas</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="aktivitas.html" class="dropdown-item">Pelatihan</a>
                                <a href="aktivitas.html" class="dropdown-item">Kegiatan Sosial</a>
                                <a href="aktivitas.html" class="dropdown-item">Kunjungan</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="artikel.html" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Artikel</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="artikel.html" class="dropdown-item">Gaya Hidup</a>
                                <a href="artikel.html" class="dropdown-item">Edukasi</a>
                                <a href="artikel.html" class="dropdown-item">Info</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Kontak</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Bahasa</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">
                                    <img src="https://flagcdn.com/w40/id.png" width="20" class="me-2" alt="ID Flag"> Indonesia
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img src="https://flagcdn.com/w40/gb.png" width="20" class="me-2" alt="UK Flag"> English
                                </a>
                            </div>

                        </div>
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
                        <h4 class="text-white mb-4">Tautan Berguna</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Beranda</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Tentang Kami</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Layanan</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Artikel</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Kontak</a>
                    </div>
                </div>

                <!-- Artikel Kami -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Artikel Kami</h4>
                        <p class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Teknologi (25 artikel)</p>
                        <p class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Kesehatan (20 artikel)</p>
                        <p class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Gaya Hidup (18 artikel)</p>
                    </div>
                </div>

                <!-- Sosial Media -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Sosial Media</h4>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-white mb-2"><i class="fab fa-instagram me-2"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <!-- Marketplace -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Marketplace</h4>
                        <div class="d-flex flex-column">
                            <p>No sosial media available</p>
                        </div>
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