<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FaskesDepok | Detail</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
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
</head>

<body>
    <header id="header" class="sticky-top" style="top:0;">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?= base_url('index.php/home'); ?>">Faskes-Depok</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link active" href="<?= base_url('index.php/home'); ?>">Home</a></li>
                    <?php if ($this->session->userdata('USERNAME')) { ?>
                        <li class="dropdown"><a href="#"><span>Selamat Datang, <?= $this->session->userdata('USERNAME'); ?></span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <?php if ($this->session->userdata('ROLE') == 'administrator') { ?>
                                    <li><a href="<?= base_url('index.php/admin/dashboard/'); ?>"><span class="d-none d-md-inline">Admin Dashboard</a></li>
                                <?php } ?>
                                <li><a href="<?= base_url('index.php/login/logout'); ?>"><span class="d-none d-md-inline">Logout</a></li>
                            </ul>
                        </li>
                </ul>
            </nav>
        <?php } else { ?>
            </ul>
            </nav><!-- .navbar -->
            <a class="appointment-btn" href="login"><span class="d-none d-md-inline">Login</a>
        <?php } ?>
        </div>
    </header><!-- End Header -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title"><?= $faskes->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <a href="<?= base_url('assets/foto/') . $faskes->foto1; ?>" data-toggle="lightbox" data-title="foto 1 - <?= $faskes->nama; ?>" data-gallery="gallery" style="min-height:100%;">
                                        <img src="<?= base_url('assets/foto/') . $faskes->foto1; ?>" class="img-fluid mb-2" alt="foto1" style="min-height:100%;" />
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <a href="<?= base_url('assets/foto/') . $faskes->foto2; ?>" data-toggle="lightbox" data-title="foto 2 - <?= $faskes->nama; ?>" data-gallery="gallery" style="min-height:100%;">
                                        <img src="<?= base_url('assets/foto/') . $faskes->foto2; ?>" class="img-fluid mb-2" alt="foto2" style="min-height:100%;" />
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <a href="<?= base_url('assets/foto/') . $faskes->foto3; ?>" data-toggle="lightbox" data-title="foto 3 - <?= $faskes->nama; ?>" data-gallery="gallery" style="min-height:100%;">
                                        <img src="<?= base_url('assets/foto/') . $faskes->foto3; ?>" class="img-fluid mb-2" alt="foto3" style="min-height:100%;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <h1><?= $faskes->nama ?> (<?= $faskes->jenis ?>)</h1>
                                <h4 class="text-muted"><?= $faskes->alamat ?> (<?= $faskes->kecamatan ?>)
                                    <small class="d-block text-muted">Koordinat : <?= $faskes->latlong ?> </small>
                                </h4>

                                <table class="table">
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td><?= $faskes->deskripsi ?></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Rating</td>
                                        <td>:</td>
                                        <td> <?= ($faskes->skor_rating) ? $faskes->skor_rating : '0' ?>/5</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td><?= $faskes->website ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Dokter</td>
                                        <td>:</td>
                                        <td><?= $faskes->jumlah_dokter ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pegawai</td>
                                        <td>:</td>
                                        <td><?= $faskes->jumlah_pegawai ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-10">
                                <h1>Komentar :</h1>
                            </div>
                            <div class="col-2">
                                <a href="<?= base_url('home/comment?id=') . $faskes->id; ?>" class="btn btn-sm btn-primary btn-block">Komentar Baru</a>
                            </div>
                            <?php foreach ($comment as $c) { ?>
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <h3><?= $c->username; ?>
                                                <small class="text-sm text-muted d-block">Rating : <?= $c->nilai_rating_id; ?>/5</small>
                                            </h3>
                                            <div class="card-text">
                                                <?= $c->isi; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('dist/vendor/purecounter/purecounter.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendor/php-email-form/validate.js') ?>"></script>
    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="<?= base_url('assets/'); ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="<?= base_url('assets/'); ?>plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>