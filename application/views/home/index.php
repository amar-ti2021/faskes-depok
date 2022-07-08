<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Faskes-Depok</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- Favicons -->
    <link href="<?php echo base_url('dist/img/Logo-Faskes.png') ?>" rel="icon">
    <link href="<?php echo base_url('dist/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('dist/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('dist/css/style.css') ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="sticky-top" style="top:0;">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?= base_url('/home'); ?>">Faskes-Depok</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link active" href="<?= base_url('/home'); ?>">Home</a></li>
                    <li><a class="" href="<?= base_url('/#team'); ?>" >Team</a></li>
                    <li><a class="" href="<?= base_url('/#search'); ?>">Fasilitas</a></li>
                    <?php if ($this->session->userdata('USERNAME')) { ?>
                        <li class="dropdown"><a href="#"><span>Selamat Datang, <?= $this->session->userdata('USERNAME'); ?></span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <?php if ($this->session->userdata('ROLE') == 'administrator') { ?>
                                    <li><a href="<?= base_url('admin/dashboard/'); ?>"><span class="d-none d-md-inline">Admin Dashboard</a></li>
                                <?php } ?>
                                <li><a href="<?= base_url('index.php/login/logout'); ?>"><span class="d-none d-md-inline">Logout</a></li>
                            </ul>
                        </li>
                </ul>
            </nav>
        <?php } else { ?>
            </ul>
            </nav><!-- .navbar -->
            <a class="appointment-btn" href="<?= base_url('index.php/login'); ?>"><span class="d-none d-md-inline">Login</a>
        <?php } ?>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat Datang di Faskes Depok</h1>
            <h2>Basis data fasilitas kesehatan di kota depok</h2>
            <a href="#search" class="btn-get-started scrollto">Cari Fasilitas Kesehatan</a>
        </div>
    </section><!-- End Hero -->


    <main id="main">



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts" style="background-color: rgba(255,255,255,0);">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fa-solid fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah['puskesmas']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Puskesmas</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="fa-solid fa-house-chimney-medical"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah['rumah_sakit']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Rumah Sakit</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa-solid fa-bed"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah['klinik']; ?>" data-purecounter-duration=" 1" class="purecounter"></span>
                            <p>Klinik</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa-solid fa-person-pregnant"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah['bidan']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Bidan</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="doctors">
      <div class="container">

        <div class="section-title">
    <h2>Team Kami</h2>
    <p>Tim Dalam Pembuatan Website Ini</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <div class="member-img">
          <img src="<?php echo base_url('dist\img\tim\photo-fadil.jpg') ?>"  width="100" height="150" class="img-fluid" alt="">
        </div>
        <div class="member-info"><br>
          <h4>Muhammad Nur Fadillah </h4>
          <span>0110221109</span>
          <p>Saya adalah bagian dari pembuatan website ini sebagai project akhir mata kuliah pemrograman web II 2022.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
      <div class="member">
        <div class="member-img">
          <img src="<?php echo base_url('dist\img\tim\photo-daffa.jpeg') ?>" width="150" height="150" class="img-fluid" alt="">
        </div>
        <div class="member-info"><br>
          <h4>Daffa Bagus Radityo </h4>
          <span>0110221107</span>
          <p>Saya adalah bagian dari pembuatan website ini sebagai project akhir mata kuliah pemrograman web II 2022.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
      <div class="member">
        <div class="member-img">
          <img src="<?php echo base_url('dist\img\tim\photo-amar.jpeg') ?>" width="120" height="150" class="img-fluid" alt="">
        </div>
        <div class="member-info"><br>
          <h4>Muhammad Amar Dafi</h4>
          <span>0110221095</span>
          <p>Saya adalah bagian dari pembuatan website ini sebagai project akhir mata kuliah pemrograman web II 2022.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <div class="member-img">
          <img src="<?php echo base_url('dist\img\tim\photo-putri.jpg') ?>" width="110" height="150" class="img-fluid" alt="">
        </div>
        <div class="member-info"><br>
          <h4>Putri Aulia Rahmani </h4>
          <span>0110221103</span>
          <p>Saya adalah bagian dari pembuatan website ini sebagai project akhir mata kuliah pemrograman web II 2022.</p>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- End Team Section -->

        <section id="search" class="p-0">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center">Cari Fasilitas Kesehatan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="form container">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Cari" aria-label="Search" id="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row p-5" id="faskes-list" style="min-height:400px">
                <?php foreach ($faskes as $f) { ?>
                    <div class="col-3 mb-3">
                        <div class="card h-100">
                            <img class="bd-placeholder-img card-img-top" src="<?= base_url('assets/foto/') . $f->foto1; ?>" style="height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $f->nama; ?></h5>
                                <p class="card-text"><?= $f->alamat; ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('home/detail?id=') . $f->id; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Medilab</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Faskes-Depok</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('dist/vendor/purecounter/purecounter.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/php-email-form/validate.js') ?>"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
        $(document).ready(function() {
            $('#keyword').on('keyup', function() {
                $('#faskes-list').load("<?= base_url('home/search/') ?>" + $('#keyword').val());
            })

        })
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/pages/dashboard.js"></script>
    <!-- Template Main JS File -->
    <script src="<?php echo base_url('dist/js/main.js') ?>"></script>


</body>

</html>