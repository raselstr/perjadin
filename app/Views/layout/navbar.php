  <?= $this->extend('layout/default'); ?>
  
  <?= $this->section('navbar') ?>
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <div class="info ">
                <span class="username"><a href="<?= site_url('/'); ?>">Jonathan Burke Jr.</a></span><p>
                <span class="description">Shared publicly - 7:30 PM today</span>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-block ">
            <div class="image "><img src="dist/img/user2-160x160.jpg" class="img-circle img-bordered-sm" alt="User Image"></div>
          </div>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Informasi dan Data Profil</span>
            <!-- <div class="dropdown-divider"></div> -->
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> Login
              <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
            </a>
          </div>
        </a>
      </li>
    </ul>

    <!-- <div class="info ">
                <span class="username"><a href="<?= site_url('/'); ?>">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM today</span>
              </div> -->
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-block ">
            <div class="image "><img src="dist/img/user2-160x160.jpg" class="img-circle img-bordered-sm" alt="User Image"></div>
            <div class="info ">
              <span class="username"><a href="<?= site_url('/'); ?>">Jonathan Burke Jr.</a><p> -->
                <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
              <!-- <span class="description">Shared publicly - 7:30 PM today</span>
              </span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- 
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <!-- <li class="nav-item dropdown">
      <div class="user-panel d-flex ">
        <div class="image"><img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></div>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="info"><a href="" class="d-block">Alexander Pierce</a></div>
          <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span class="float-right text-muted text-sm">2 days</span></a>
        </div>
      </div>
      </li> -->
    <!-- </ul> -->
  </nav>
  <!-- /.navbar -->
<?= $this->endSection() ?>