<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <div class="sidebar" style="min-height: 100vh">
    <!-- Brand Logo -->
    <a href="/admin/dashboard/" class="brand-link">
      <span class="brand-text font-weight-light d-block text-center">Admin<b>FaskesDepok</b></span>
    </a>
    <!-- Sidebar user (optional) -->
    <div class="user-panel d-flex align-items-center">
      <div class="info d-flex flex-column " style=" pointer-events: none">
        <div class="text-white font-weight-bold m-0 p-0">
          <?= $this->session->userdata('USERNAME'); ?>
        </div>
        <div>
          <a href="#" class="d-block">
            <?= $this->session->userdata('ROLE'); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('home'); ?>" class="nav-link {{ ($active === 'accounts')? " active" : "" }}">
            <i class="fas fa-house nav-icon"></i>
            <p>Halaman Depan</p>
          </a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
          <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= ($active == 'dashboard') ? "active" : "" ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/faskes') ?>" class="nav-link <?= ($active === 'faskes') ? "active" : "" ?>">
            <i class="fas fa-hospital nav-icon"></i>
            <p>Faskes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/kecamatan') ?>" class="nav-link <?= ($active === 'kecamatan') ? "active" : "" ?>">
            <i class="fas fa-location-dot nav-icon"></i>
            <p>Kecamatan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/jenis_faskes') ?>" class="nav-link  <?= ($active === 'jenis_faskes') ? "active" : "" ?>">
            <i class="fas fa-hospital-user nav-icon"></i>
            <p>Jenis Faskes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/users') ?>" class="nav-link <?= ($active === 'users') ? "active" : "" ?>">
            <i class="fas fa-users nav-icon"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/comments') ?>" class="nav-link  <?= ($active === 'comments') ? "active" : "" ?>">
            <i class="fas fa-message nav-icon"></i>
            <p>Comments</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>