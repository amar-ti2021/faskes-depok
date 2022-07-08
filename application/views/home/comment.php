<?php
if (!$this->session->has_userdata('USERNAME')) {
    redirect(base_url() . 'login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FaskesDepok | Comment</title>

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

            <h1 class="logo me-auto"><a href="<?= base_url('/home'); ?>">Faskes-Depok</a></h1>
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
                    <?php echo form_open('index.php/home/addComment', ['action' => 'post']); ?>
                    <div class="card-header">
                        <h4 class="card-title">Komentar untuk <?= $faskes->nama; ?></h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id_faskes" value="<?= $faskes->id; ?>">
                        <div class=" form-group row">
                            <label for="nilai_rating" class="col-sm-2 col-form-label">Nilai Rating</label>
                            <div class="col-sm-10">
                                <select name="nilai_rating" class="form-control" id="nilai_rating">
                                    <option value="1">1 - Jelek</option>
                                    <option value="2">2 - Kurang Bagus</option>
                                    <option value="3">3 - Biasa Saja</option>
                                    <option value="4">4 - Bagus</option>
                                    <option value="5">5 - Sangat Bagus</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-2 col-form-label">Komentar</label>
                            <div class="col-sm-10">
                                <textarea name="isi" class="form-control" id="isi" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                    <!-- /.card-footer -->
                    <?php echo form_close(); ?>
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