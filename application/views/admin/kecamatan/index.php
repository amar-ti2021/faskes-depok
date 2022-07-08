	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0">Kelola Kecamatan</h1>
	                </div><!-- /.col -->
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="<?= base_url('index.php/admin/dashboard') ?>">Admin</a></li>
	                        <li class="breadcrumb-item active">kecamatan</li>
	                    </ol>
	                </div><!-- /.col -->
	            </div><!-- /.row -->
	        </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
	        <div class="container-fluid">
	            <div class="card">
	                <div class="card-header">
	                    <h3 class="card-title">Kelola Data Kecamatan</h3>
	                </div>
	                <!-- /.card-header -->
	                <div class="card-body">
	                    <table id="example1" class="table table-bordered table-striped">

	                        <a href="<?php echo base_url('index.php/admin/kecamatan/create') ?>" class="btn btn-success mb-3">Tambah Kecamatan</a>

	                        <thead>
	                            <tr>
	                                <th>No</th>
	                                <th>Nama</th>
	                                <th>action</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <?php $no = 1; ?>
	                            <?php foreach ($kecamatan as $k) : ?>
	                                <tr>
	                                    <td> <?= $no++; ?> </td>
	                                    <td> <?= $k->nama; ?> </td>

	                                    <td width="300px">
	                                        <a href="<?= base_url('index.php/admin'); ?>/kecamatan/edit?id=<?php echo $k->id ?>" class="btn btn-warning mb-1">Update</a> |
	                                        <a href="<?= base_url('index.php/admin'); ?>/kecamatan/delete?id=<?php echo $k->id ?>" onclick="return confirm('Apakah Anda Yakin'); " class="btn btn-danger mb-1">Hapus</a>
	                                    </td>
	                                </tr>
	                            <?php endforeach; ?>
	                        </tbody>
	                    </table>
	                </div>
	                <!-- /.card-body -->
	            </div>
	            <div class="row">
	            </div>
	            <!-- /.row (main row) -->
	        </div><!-- /.container-fluid -->
	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
	    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
	    All rights reserved.
	    <div class="float-right d-none d-sm-inline-block">
	        <b>Version</b> 3.1.0
	    </div>
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
	    <!-- Control sidebar content goes here -->
	</aside>