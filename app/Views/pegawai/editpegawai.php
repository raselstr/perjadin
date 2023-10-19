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
                    <h3 class="card-title">Edit Data Pegawai</h3>
                  </div>
                  <?php $errors = session()->getFlashdata('validation') ?>
                  <form action="<?= site_url('pegawai/update/'.$peg->pegawai_id) ?>" method="post" class="form-horizontal">
                    <?= csrf_field() ?>
                    <div class="card-body">
                      <div class="form-group row">
                          <input type="hidden" class="form-control"  name="pegawai_id" value="<?= $peg->pegawai_id; ?>">
                      </div>
                      <div class="form-group row">
                        <label for="pegawai_nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-4">
                          <input type="text" maxlength="18" class="form-control <?= isset($errors['pegawai_nip']) ? 'is-invalid' : null ; ?>"  name="pegawai_nip" placeholder="Nip" id="pegawai_nip" value="<?= $peg->pegawai_nip; ?>">
                            <div class="invalid-feedback">
                                <?= isset($errors['pegawai_nip']) ? $errors['pegawai_nip'] : null ; ?>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pegawai_nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-4">
                          <input class="form-control <?= isset($errors['pegawai_nama']) ? 'is-invalid' : null ; ?>" type="text" name="pegawai_nama" placeholder="Nama Pegawai" id="pegawai_nama" value="<?= $peg->pegawai_nama ?>">
                          <div class="invalid-feedback">
                              <?= isset($errors['pegawai_nama']) ? $errors['pegawai_nama'] : null ; ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pegawai_jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-4">
                          <input class="form-control <?= isset($errors['pegawai_jabatan']) ? 'is-invalid' : null ; ?>" type="text" name="pegawai_jabatan" placeholder="Jabatan Pegawai" id="pegawai_jabatan" value="<?= $peg->pegawai_jabatan ?>">
                            <div class="invalid-feedback">
                                <?= isset($errors['pegawai_jabatan']) ? $errors['pegawai_jabatan'] : null ; ?>
                            </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Eselon</label>
                        <div class="col-sm-4">
                          <select class="form-control <?= isset($errors['eselon_id']) ? 'is-invalid' : null ; ?>" name="eselon_id" id="eselon_id" value="<?= old('eselon_id') ?>">
                            <option value="0">Non Eselon</option>
                            <option value="1">Eselon 4</option>
                            <option value="2">Eselon 3</option>
                            <option value="3">Eselon 2</option>
                            <option value="4">Pejabat Negara</option>
                          </select>
                          <div class="invalid-feedback">
                                <?= isset($errors['eselon_id']) ? $errors['eselon_id'] : null ; ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectBorder" class="col-sm-2 col-form-label">Pangkat dan Golongan</label>
                        <div class="col-sm-4">
                          <select class="form-control <?= isset($errors['pangkat_id']) ? 'is-invalid' : null ; ?>" name="pangkat_id" placeholder="Pengkat" id="pangkat_id" value="<?= old('pangkat_id') ?>">
                            <option value="1">Juru</option>
                            <option value="2">Pengatur</option>
                            <option value="3">Penata</option>
                            <option value="4">Pembina</option>
                            <option value="5">Pejabat Negara</option>
                          </select>
                          <div class="invalid-feedback">
                                <?= isset($errors['pangkat_id']) ? $errors['pangkat_id'] : null ; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <a href="<?= site_url('pegawai'); ?>" class="btn btn-default">Kembali</a>
                      <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                  </form>
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