<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Asthmasense</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon" />
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style-landing.css') ?>" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                <span>Asthmasense</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#features">Features</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#recent-blog-posts">Blog</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto" href="<?= base_url('/login') ?>">Get Started</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Asthmasense.</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Kami menyediakan solusi cerdas untuk mendeteksi asma dengan
                        efektif.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="<?= base_url('/login') ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('assets/img/hero-img.png') ?>" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kami</h3>
                            <h2>Asthmasense: Mengenali Asma dengan Cepat dan Akurat</h2>
                            <p>
                                Kami di Asthmasense membantu mengenali tanda-tanda asma dengan
                                lebih cepat. Kami hadir dengan teknologi yang memberikan
                                informasi akurat untuk pengelolaan asma yang lebih baik.
                                Bergabunglah bersama kami untuk memahami deteksi dini asma.
                            </p>
                            <div class="text-center text-lg-start"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url('assets/img/discussion.png') ?>" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>Cepat, Akurat, Mudah</p>
                </header>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="<?= base_url('assets/img/values-1.png') ?>" class="img-fluid" alt="" />
                            <h3>Kemudahan Penggunaan</h3>
                            <p>
                                Platform yang mudah digunakan untuk penggunaan sehari-hari
                                yang nyaman.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="<?= base_url('assets/img/values-2.png') ?>" class="img-fluid" alt="" />
                            <h3>Akurasi Tinggi</h3>
                            <p>
                                Memberikan informasi yang akurat untuk pengelolaan asma yang
                                lebih baik.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="<?= base_url('assets/img/values-3.png') ?>" class="img-fluid" alt="" />
                            <h3>Deteksi Cepat</h3>
                            <p>
                                Mendeteksi tanda-tanda asma secara dini untuk respons yang
                                lebih cepat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= count($users) ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= count($history) ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Total Checkup</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= count($disease) ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Disease Type</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?= count($rule) ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Rule Total</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Features</h2>
                    <p>Cepat, Tepat, Dapat Dipercaya.</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?= base_url('assets/img/features.png') ?>" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">
                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Deteksi Cepat</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Riwayat Deteksi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Artikel</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Cetak Deteksi</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / row -->
            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        Apa yang membedakan Asthmasense dari sistem deteksi asma
                                        lainnya?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Asthmasense menggunakan teknologi canggih untuk deteksi
                                        cepat, riwayat deteksi yang tercatat, serta menyediakan
                                        sumber informasi yang terpercaya terkait asma.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        Bagaimana cara mendapatkan hasil deteksi dari Asthmasense?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Setelah deteksi selesai, hasilnya akan tersedia dalam
                                        platform. Pengguna dapat melihatnya dan mencetak hasilnya
                                        jika diperlukan untuk konsultasi dengan dokter.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        Bagaimana keamanan informasi deteksi yang disimpan di
                                        Asthmasense?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Kami menjaga privasi data pengguna dengan sangat serius.
                                        Informasi deteksi dan riwayatnya disimpan dengan aman dan
                                        hanya dapat diakses oleh pengguna yang bersangkutan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                        Apakah Asthmasense tersedia untuk digunakan di semua
                                        perangkat?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Ya, Asthmasense dapat diakses melalui berbagai perangkat
                                        seperti komputer, tablet, dan ponsel pintar yang terhubung
                                        ke internet.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                        Bagaimana proses pembaruan informasi terkait manajemen
                                        asma di Asthmasense?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        Tim kami secara teratur mengupdate sumber informasi
                                        terkait asma agar selalu sesuai dengan perkembangan
                                        terbaru dalam manajemen dan penanganan asma. Informasi ini
                                        kemudian tersedia bagi pengguna Asthmasense.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Team</h2>
                    <p>Tim Kami</p>
                </header>

                <div class="row gy-4">
                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/adliif/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Adli Fiqrullah</h4>
                                <span>2117051075</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-2.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/faiz.muzaaki/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Faiz Muzaki</h4>
                                <span>2117051066</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/gramadhan.15/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Gilang Ramadhan</h4>
                                <span>2117051082</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-4.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/frllelrtza/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>M Al-Farrel E</h4>
                                <span>2117051092</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-5.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/bayutiarr/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>M Bayu Tiar</h4>
                                <span>2117051071</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url('assets/img/team/team-6.jpg') ?>" class="img-fluid" alt="" />
                                <div class="social">
                                    <a href="https://www.instagram.com/waliidilham/"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Waliid Ilham R</h4>
                                <span>2117051094</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">
                    <?php
                    foreach ($articles['article'] as $article) {
                    ?>
                        <div class="col-lg-4">
                            <div class="post-box">
                                <div class="post-img">
                                    <img src="<?= $article['image'] ?>" class="img-fluid" alt="" style="height: 240px; width:100%">
                                </div>
                                <span class="post-date"><?= $article['created_at'] ?></span>
                                <h3 class="post-title">
                                    <?= $article['title'] ?>
                                </h3>
                                <a href="<?= base_url('user/article/' . $article['id']) ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Recent Blog Posts Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Asthmasense</span>
                        </a>
                        <p>
                            Asthmasense menggunakan kecerdasan buatan untuk memberikan saran personal dalam mengelola asma, berdasarkan informasi gejala yang diberikan pengguna.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a class="nav-link scrollto" href="#">Home</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a class="nav-link scrollto" href="#about">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right "></i><a class="nav-link scrollto" href="#features">Features</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a class="nav-link scrollto" href="#faq">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Prof. Dr Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Kota Bandar Lampung, Lampung 35141
                        </p>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@asthmasense.com<br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Asthmasense</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>