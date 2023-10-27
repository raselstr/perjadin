<!-- Info boxes -->
        
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
      <?php 
        $db = \Config\Database::connect();
        $user = $db->query('SELECT * FROM users WHERE user_active = true');
        $sum = $user->getNumRows();
      ?>
      <div class="info-box-content">
        <span class="info-box-text">User</span>
        <span class="info-box-number">
          <?= $sum; ?>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
      <?php 
        $db = \Config\Database::connect();
        $group = $db->query('SELECT * FROM roles');
        $sum = $group->getNumRows();
      ?>
      <div class="info-box-content">
        <span class="info-box-text">Group</span>
        <span class="info-box-number"><?= $sum; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      <?php 
        $db = \Config\Database::connect();
        $group = $db->query('SELECT * FROM spts');
        $sum = $group->getNumRows();
      ?>

      <div class="info-box-content">
        <span class="info-box-text">Perjadin</span>
        <span class="info-box-number"><?= $sum; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Laporan Perjadin</span>
        <span class="info-box-number">2,000</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>