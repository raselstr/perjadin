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
                <form action="<?= site_url('pegawai/create') ?>" method="post">
                  <?= csrf_field() ?>
                    <div class="form-group">
                      <label for="pegawai_nip">Nip</label>
                      <input type="text" class="form-control"  name="pegawai_nip" placeholder="Nip" id="pegawai_nip" value="<?= set_value('pegawai_nip') ?>">
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
                    <div class="row">
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
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