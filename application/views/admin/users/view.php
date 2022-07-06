<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Fasilitas Kesehatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">faskes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data <?= $faskes->nama; ?></h3>

          <div class="card-tools">
            <a href="<?= base_url('admin/faskes'); ?>" type="button" class="btn btn-tool">
              <i class="fas fa-arrow-left"></i>
              Kembali
            </a>
          </div>
        </div>
        <div class="card-body">

          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $faskes->nama ?></td>
                  </tr>
                  <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><?= $faskes->kecamatan ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $faskes->alamat ?></td>
                  </tr>
                  <tr>
                    <td>Koordinat</td>
                    <td>:</td>
                    <td><?= $faskes->latlong ?></td>
                  </tr>
                  <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td><?= $faskes->jenis ?></td>
                  </tr>
                  <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><?= $faskes->deskripsi ?></td>
                  </tr>
                  <tr>
                    <td>Skor Rating</td>
                    <td>:</td>
                    <td><?= $faskes->skor_rating ?></td>
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
            <div class="col-sm-4">
              <div class="row">
                <div class="col-12 p-3">
                  <img src="<?= base_url('assets/foto/') . $faskes->foto1; ?>" alt="Foto 1" style="width: 100%;">
                </div>
              </div>
              <div class="row">
                <div class="col-12 p-3">
                  <img src="<?= base_url('assets/foto/') . $faskes->foto2; ?>" alt="Foto 2" style="width: 100%;">
                </div>
              </div>
              <div class="row">
                <div class="col-12 p-3">
                  <img src="<?= base_url('assets/foto/') . $faskes->foto3; ?>" alt="Foto 3" style="width: 100%;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>