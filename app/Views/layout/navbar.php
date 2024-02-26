
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
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('images/logo.png'); ?>" class="user-image img-circle " alt="User Image">
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?= base_url('images/logo.png'); ?>" class="elevation-2" alt="User Image">

            <p>
              <?= session('nama') ?>
              <small><?= session('role') ?></small>
            </p>
          </li>
          <li class="user-footer">
            <a href="<?= site_url('/'); ?>" class="btn btn-default btn-flat">Profile</a>
            <a href="<?= site_url('logout'); ?>" class="btn btn-default btn-flat float-right">Keluar</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
