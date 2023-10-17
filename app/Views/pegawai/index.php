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
                  <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#modal-default">
                    Tambah Data Pegawai
                  </button>
                </div>
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Pegawai</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              <div class="card-body">
                <?php $errors = session()->getFlashdata('validation') ?>
                <form action="<?= site_url('pegawai/create') ?>" method="post">
                  <?= csrf_field() ?>
                    <div class="form-group">
                      <label for="pegawai_nip">Nip</label>
                      <input class="form-control <?= isset($errors['user_nama']) ? 'is-invalid' : null ; ?>" type="text" name="pegawai_nip" placeholder="Nip" id="pegawai_nip" value="<?= set_value('pegawai_nip') ?>">
                    </div>
                    <div class="form-group">
                      <label for="pegawai_nama">Nama</label>
                      <input class="form-control" type="text" name="pegawai_nama" placeholder="Nama Pegawai" id="pegawai_nama" value="<?= set_value('pegawai_nama') ?>">
                    </div>
                    <div class="form-group">
                      <label for="pegawai_jabatan">Jabatan</label>
                      <input class="form-control" type="text" name="pegawai_jabatan" placeholder="Jabatan Pegawai" id="pegawai_jabatan" value="<?= set_value('pegawai_jabatan') ?>">
                    </div>
                    <div class="form-group">
                      <label for="eselon_id">Eselon</label>
                      <input class="form-control" type="text" name="eselon_id" placeholder="Eselon" id="eselon_id" value="<?= set_value('eselon-_id') ?>">
                    </div>
                    <div class="form-group">
                      <label for="pangkat_id">Pangkat</label>
                      <input class="form-control" type="text" name="pangkat_id" placeholder="Pengkat" id="pangkat_id" value="<?= set_value('pangkat_id') ?>">
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?= $this->endSection() ?>