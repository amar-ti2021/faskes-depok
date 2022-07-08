  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/dashboard') ?>" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/faskes') ?>" class="nav-link">Faskes</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/kecamatan') ?>" class="nav-link">Kecamatan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/jenis_faskes') ?>" class="nav-link">Jenis Faskes</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/users') ?>" class="nav-link">Users</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('index.php/admin/comments') ?>" class="nav-link">Comments</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->


      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/home') ?>" role="button">
          <i class="fas fa-house"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('index.php/Login/logout') ?>" class="nav-link" onclick="logout()">
          <i class="fa fa-sign-out"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->