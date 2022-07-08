<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Faskes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tambah Data Faskes</li>
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
            <h3 class="card-title">Tambah Fasilitas Kesehatan</h3>
            <div class="card-tools">
              <a href="<?= base_url('index.php/admin/faskes'); ?>" type="button" class="btn btn-tool">
                <i class="fas fa-arrow-left"></i>
                Kembali
              </a>
            </div>
          </div>

          <!-- /.card-header -->
          <!-- form start -->
          <?php echo form_open_multipart('admin/faskes/save', ['action' => 'post']); ?>
          <div class="card-body">
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
              <div class="col-sm-10">
                <select name="kecamatan" class="custom-select">
                  <?php foreach ($kecamatan as $k) { ?>
                    <option value="<?= $k->id; ?>"><?= $k->nama; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="latlong" class="col-sm-2 col-form-label">Koordinat</label>
              <div class="col-sm-10">
                <input type="text" name="latlong" class="form-control" id="latlong" placeholder="Koordinat">
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
              <div class="col-sm-10">
                <select name="jenis" class="custom-select">
                  <?php foreach ($jenis_faskes as $j) { ?>
                    <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" id="alamat" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="website" class="col-sm-2 col-form-label">Website</label>
              <div class="col-sm-10">
                <input type="text" name="website" class="form-control" id="website" placeholder="Website">
              </div>
            </div>
            <div class="form-group row">
              <label for="jumlah_dokter" class="col-sm-2 col-form-label">Jumlah Dokter</label>
              <div class="col-sm-10">
                <input type="number" name="jumlah_dokter" class="form-control" id="jumlah_dokter" min="1" value="1">
              </div>
            </div>
            <div class="form-group row">
              <label for="jumlah_pegawai" class="col-sm-2 col-form-label">Jumlah Pegawai</label>
              <div class="col-sm-10">
                <input type="number" name="jumlah_pegawai" class="form-control" id="jumlah_pegawai" min="1" value="1">
              </div>
            </div>
            <div class="form-group row">
              <label for="foto_1" class="col-sm-2 col-form-label">Foto 1</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto_1" id="foto_1" accept="image/*">
                    <label class="custom-file-label" for="foto_1 ">Choose Image</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="foto_2" class="col-sm-2 col-form-label">Foto 2</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto_2" id="foto_2" accept="image/*">
                    <label class="custom-file-label" for="foto_2 ">Choose Image</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="foto_3" class="col-sm-2 col-form-label">Foto 3</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto_3" id="foto_3" accept="image/*">
                    <label class="custom-file-label" for="foto_3 ">Choose Image</label>
                  </div>
                </div>
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