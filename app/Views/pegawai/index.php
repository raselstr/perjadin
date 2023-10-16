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
              <div class="card-header">
                <div class="row">
                <div class="col-sm-8">
                  <h5 class="m-0">Daftar Pegawai</h5>
                </div>
                <div class="col-sm-4">
                  <a href="<?= site_url('pegawai/new'); ?>" type="button" class="btn btn-block btn-primary btn-sm">Tambah Data Pegawai</a>
                </div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-overlay">
                  Launch Modal with Overlay
                </button>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Pangkat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($pegawais as $key => $value) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $value->pegawai_nip ?></td>
                          <td><?= $value->pegawai_nama ?></td>
                          <td><?= $value->pegawai_jabatan ?></td>
                          <td><?= $value->eselon_id ?></td>
                          <td><?= $value->pangkat_id ?></td>
                          <td>aksi</td>
                        </tr>
                      <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Pangkat</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
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