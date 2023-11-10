<!-- Info boxes -->
        
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-info">
      <?php 
        $db = \Config\Database::connect();
        $user = $db->query('SELECT * FROM users WHERE user_active = true');
        $sum = $user->getNumRows();
      ?>
      <div class="inner">
        <h3><?= $sum; ?></h3>
        <p>User</p>
      </div>
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
      <a href="" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
      <?php 
        $db = \Config\Database::connect();
        $group = $db->query('SELECT * FROM roles');
        $sum = $group->getNumRows();
      ?>
      <div class="inner">
        <h3><?= $sum; ?></h3>

        <p>Group</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <?php 
        $db = \Config\Database::connect();
        $group = $db->query('SELECT * FROM spts');
        $sum = $group->getNumRows();
      ?>
    <!-- small card -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?= $sum; ?></h3>

        <p>Perjadin</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <!-- <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      

      <div class="info-box-content">
        <span class="info-box-text">Perjadin</span>
        <span class="info-box-number"></span>
      </div>
       /.info-box-content -->
    <!-- </div> -->
    <!-- /.info-box -->
  <!-- </div> -->
  <!-- /.col -->
  <!-- <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Laporan Perjadin</span>
        <span class="info-box-number">2,000</span>
      </div> -->
      <!-- /.info-box-content -->
    <!-- </div> -->
    <!-- /.info-box -->
  <!-- </div> --> 
</div>