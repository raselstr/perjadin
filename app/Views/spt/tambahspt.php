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
                      <div class="col">
                        <div class="form-group row">
                          <label for="spt_nomor" class="col-sm-4 col-form-label" hidden>Tahun</label>
                          <div class="col">
                            <input type="text" name="spt_tahun" placeholder="Tahun" id="spt_tahun" hidden>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_pjb_tugas" class="col-sm-4 col-form-label">Pejabat Pemberi Tugas</label>
                          <div class="col">
                            <select name="spt_pjb_tugas" id="spt_pjb_tugas" class="form-control <?= isset($errors['spt_pjb_tugas']) ? 'is-invalid' : null ; ?>" value="<?= old('spt_pjb_tugas') ?>">
                              <option value="">Pilih Pejabat yang berwenang ...!</option>
                              <option value="Kepala Dinas">Kepala Dinas</option>
                              <option value="Sekretaris">Sekretaris</option>
                            </select>
                            <!-- <input class="form-control <?= isset($errors['spt_pjb_tugas']) ? 'is-invalid' : null ; ?>" type="text" name="spt_pjb_tugas" placeholder="Pejabat Pemberi Tugas" id="spt_pjb_tugas" value="<?= old('spt_pjb_tugas') ?>"> -->
                            <div class="invalid-feedback">
                                <?= isset($errors['spt_pjb_tugas']) ? $errors['spt_pjb_tugas'] : null ; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_jenis" class="col-sm-4 col-form-label">Jenis Perjalanan Dinas</label>
                          <div class="col">
                            <select name="spt_jenis" id="spt_jenis" class="form-control <?= isset($errors['spt_jenis']) ? 'is-invalid' : null ; ?>" value="<?= old('spt_jenis') ?>">
                              <option value="">Pilih Jenis Perjalanan Dinas</option>
                              <option value="Luar Kota dalam Provinsi">Luar Kota dalam Provinsi</option>
                              <option value="Luar Kota Luar Provinsi">Luar Kota Luar Provinsi</option>
                            </select>
                            <!-- <input class="form-control <?= isset($errors['spt_jenis']) ? 'is-invalid' : null ; ?>" type="text" name="spt_jenis" placeholder="Pejabat Pemberi Tugas" id="spt_jenis" value="<?= old('spt_jenis') ?>"> -->
                            <div class="invalid-feedback">
                                <?= isset($errors['spt_jenis']) ? $errors['spt_jenis'] : null ; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_dasar" class="col-sm-4 col-form-label">Dasar Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_dasar']) ? 'is-invalid' : null ; ?>" type="text" name="spt_dasar" placeholder="Dasar Perjalanan Dinas" id="spt_dasar" value="<?= old('spt_dasar') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_dasar']) ? $errors['spt_dasar'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_uraian" class="col-sm-4 col-form-label">Maksud Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_uraian']) ? 'is-invalid' : null ; ?>" type="text" name="spt_uraian" placeholder="Maksud Perjalanan Dinas" id="spt_uraian" value="<?= old('spt_uraian') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_uraian']) ? $errors['spt_uraian'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_mulai" class="col-sm-4 col-form-label">Tanggal Mulai Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_mulai']) ? 'is-invalid' : null ; ?>" type="date" name="spt_mulai" placeholder="Tanggal Mulai Perjalanan Dinas" id="spt_mulai" value="<?= old('spt_mulai') ?>" onkeyup="myFunction()">
                            <div class="invalid-feedback">
                              <?= isset($errors['spt_mulai']) ? $errors['spt_mulai'] : null ; ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_lama" class="col-sm-4 col-form-label">Lama Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_lama']) ? 'is-invalid' : null ; ?>" type="number" name="spt_lama" placeholder="Lama Perjalanan Dinas" id="spt_lama" value="<?= old('spt_lama') ?>" onkeyup="myFunction()">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_lama']) ? $errors['spt_lama'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_berakhir" class="col-sm-4 col-form-label">Tanggal Berakhir Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_berakhir']) ? 'is-invalid' : null ; ?>" type="date" name="spt_berakhir" placeholder="Tanggal Berakhir Perjalanan Dinas" id="spt_berakhir" value="<?= old('spt_berakhir') ?>" readonly>
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_berakhir']) ? $errors['spt_berakhir'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_tujuan" class="col-sm-4 col-form-label">Tempat Tujuan Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_tujuan']) ? 'is-invalid' : null ; ?>" type="Text" name="spt_tujuan" placeholder="Tempat Tujuan Perjalanan Dinas" id="spt_tujuan" value="<?= old('spt_tujuan') ?>">
                              <div class="invalid-feedback">
                                  <?= isset($errors['spt_tujuan']) ? $errors['spt_tujuan'] : null ; ?>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_transport" class="col-sm-4 col-form-label">Transportasi Perjalanan Dinas</label>
                          <div class="col">
                            <input class="form-control <?= isset($errors['spt_transport']) ? 'is-invalid' : null ; ?>" type="Text" name="spt_transport" placeholder="Transportasi Perjalanan Dinas" id="spt_transport" value="<?= old('spt_transport') ?>">
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

<?= $this->section('script'); ?>
  <script>
    function myFunction() {
    var jh = document.getElementById("spt_lama").value;
    var tglmulai = document.getElementById("spt_mulai").value;
    var hari = jh*24*60*60*1000;

    var hariakhir = new Date(new Date(tglmulai).getTime()+(hari)-1);
    document.getElementById("spt_berakhir").value = hariakhir.toISOString().slice(0,10);
  }

  const tahun = new Date();
    var thnini = tahun.getFullYear();
  document.getElementById("spt_tahun").value = thnini;
  </script>
<?= $this->endSection(); ?>
    

