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
                    <h3 class="card-title"><?= $title; ?></h3>
                  </div>
                  
                  <?php $errors = session()->getFlashdata('validation') ?>
                  <form action="<?= site_url('spt/create') ?>" method="post" enctype="multipart/form-data"  class="form-horizontal">
                    <?= csrf_field() ?>
                    <div class="card-body row">
                      <div class="col-8">
                        <div class="form-group row">
                          <label for="spt_nomor" class="col-sm-3 col-form-label">Nomor SPT</label>
                          <div class="col">
                            <input type="text" maxlength="18" class="form-control <?= isset($errors['spt_nomor']) ? 'is-invalid' : null ; ?>"  name="spt_nomor" placeholder="Nip" id="spt_nomor" value="<?= old('spt_nomor') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_nomor']) ? $errors['spt_nomor'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_pjb_tugas" class="col-sm-3 col-form-label">Pejabat Pemberi Tugas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_pjb_tugas']) ? 'is-invalid' : null ; ?>" type="text" name="spt_pjb_tugas" placeholder="Nama Pegawai" id="spt_pjb_tugas" value="<?= old('spt_pjb_tugas') ?>">
                            <div class="invalid-feedback">
                                <?= isset($errors['spt_pjb_tugas']) ? $errors['spt_pjb_tugas'] : null ; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_dasar" class="col-sm-3 col-form-label">Dasar Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_dasar']) ? 'is-invalid' : null ; ?>" type="text" name="spt_dasar" placeholder="Jabatan Pegawai" id="spt_dasar" value="<?= old('spt_dasar') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_dasar']) ? $errors['spt_dasar'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_uraian" class="col-sm-3 col-form-label">Maksud Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_uraian']) ? 'is-invalid' : null ; ?>" type="text" name="spt_uraian" placeholder="Jabatan Pegawai" id="spt_uraian" value="<?= old('spt_uraian') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_uraian']) ? $errors['spt_uraian'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_lama" class="col-sm-3 col-form-label">Lama Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_lama']) ? 'is-invalid' : null ; ?>" type="text" name="spt_lama" placeholder="Jabatan Pegawai" id="spt_lama" value="<?= old('spt_lama') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_lama']) ? $errors['spt_lama'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_mulai" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_mulai']) ? 'is-invalid' : null ; ?>" type="text" name="spt_mulai" placeholder="Jabatan Pegawai" id="spt_mulai" value="<?= old('spt_mulai') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_mulai']) ? $errors['spt_mulai'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_berakhir" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_berakhir']) ? 'is-invalid' : null ; ?>" type="text" name="spt_berakhir" placeholder="Jabatan Pegawai" id="spt_berakhir" value="<?= old('spt_berakhir') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_berakhir']) ? $errors['spt_berakhir'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_tujuan" class="col-sm-3 col-form-label">Tempat Tujuan Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_tujuan']) ? 'is-invalid' : null ; ?>" type="text" name="spt_tujuan" placeholder="Jabatan Pegawai" id="spt_tujuan" value="<?= old('spt_tujuan') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_tujuan']) ? $errors['spt_tujuan'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_transport" class="col-sm-3 col-form-label">Transportasi yang digunakan</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_transport']) ? 'is-invalid' : null ; ?>" type="text" name="spt_transport" placeholder="Jabatan Pegawai" id="spt_transport" value="<?= old('spt_transport') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_transport']) ? $errors['spt_transport'] : null ; ?>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>              
                    <div class="card-footer">
                      <a href="<?= site_url('spt'); ?>" class="btn btn-default">Kembali</a>
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
  </div>
    <!-- /.content -->
<?= $this->endSection() ?>

