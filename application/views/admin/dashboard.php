<div class="content-wrapper" style="min-height: 495px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h1>Halaman Depan</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-house"></i>
                        </div>
                        <a href="<?= base_url('home'); ?>" class="small-box-footer">Ke halaman depan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-success ">
                        <div class="inner">
                            <h1>Fasilitas Kesehatan</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <a href="<?= base_url('admin/faskes'); ?>" class="small-box-footer">Kelola fasilitas kesehatan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-warning ">
                        <div class="inner">
                            <h1>Kecamatan</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <a href="<?= base_url('admin/kecamatan'); ?>" class="small-box-footer">Kelola Kecamatan <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-danger ">
                        <div class="inner">
                            <h1>Jenis Faskes</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <a href="<?= base_url('admin/jenis_faskes'); ?>" class="small-box-footer">Kelola Jenis Faskes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-teal ">
                        <div class="inner">
                            <h1>Users</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="<?= base_url('admin/users'); ?>" class="small-box-footer">Kelola user <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-orange ">
                        <div class="inner">
                            <h1>Komentar</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-message"></i>
                        </div>
                        <a href="<?= base_url('admin/comments'); ?>" class="small-box-footer">Kelola komentar <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>