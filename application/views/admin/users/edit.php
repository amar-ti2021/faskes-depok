<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Edit Data <?= $user->username; ?></h3>
            <div class="card-tools">
              <a href="<?= base_url('index.php/admin/faskes'); ?>" type="button" class="btn btn-tool">
                <i class="fas fa-arrow-left"></i>
                Kembali
              </a>
            </div>
          </div>

          <!-- /.card-header -->
          <!-- form start -->
          <?php echo form_open('admin/users/save', ['action' => 'post']); ?>
          <input type="hidden" name="id" value="<?= $user->id; ?>">
          <div class="card-body">

            <div class="form-group row">
              <label for="kecamatan" class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-10">
                <select name="role" class="custom-select">
                  <option value="public" <?= ($user->role == 'public') ? 'selected' : ''; ?>>Public</option>
                  <option value="administrator" <?= ($user->role == 'administrator') ? 'selected' : ''; ?>>Administrator</option>
                </select>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Submit</button>
          </div>
          <!-- /.card-footer -->
          <?php echo form_close(); ?>
        </div>
      </div>
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
  <!-- /.control-sidebar -->
  </div>