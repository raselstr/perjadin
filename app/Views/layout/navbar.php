
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <li class="image">
          <a href="<?= site_url('/'); ?>" class="nav-link">Tahun <?= session('tahun') ?></a>
        </li>
        <div class="user-block ">
                <span class="username"><a href="<?= site_url('/'); ?>"><?= session('nama') ?></a></span>
                <span class="description"><?= session('role') ?></span>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-panel ">
            <div class="image "><img src="<?= base_url('images/logo.jpeg'); ?>" class="img-circle" alt="User Image"></div>
          </div>
          <div class="dropdown-menu dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Informasi dan Data Profil</span>
            <!-- <div class="dropdown-divider"></div> -->
            <a href="<?= site_url('/'); ?>" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profil
              <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
            </a>
            <a href="<?= site_url('logout'); ?>" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Keluar
              <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
            </a>
          </div>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>


  </nav>
