<?php

use PhpParser\Node\Stmt\Foreach_;
?>
<?= $this->extend('layout/default'); ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <?= $this->include('layout/contenheader'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
                  <?= $this->include('layout/infobox'); ?>
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Detail Data Pegawai</h3>
                  </div>
                    <div class="card-body row">
                      <div class="col-8">
                        <?php foreach ($peg as $key => $value) :  ?>
                              <?= $value->pegawai_nama; ?>
                        <?php endforeach ?>
                      </div>
                      <div class="col-4 text-center d-flex align-items-center justify-content-center">
                      <div class="">
                        <img src="" class="img-thumbnail" id="img-preview">
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?= $this->endSection() ?>