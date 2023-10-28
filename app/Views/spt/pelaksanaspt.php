<?= $this->extend('layout/default'); ?>
<?= $this->section('stylesheet'); ?>
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<?= $this->endSection(); ?>

<?= $this->section('scriptplugin'); ?>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
<?= $this->endSection(); ?>

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
                    <div class="card-body row justify-content-center">
                      <div class="col-8">
                        <div class="form-group row">
                          <div class="col">
                            <input type="text" name="spt_id" placeholder="Tahun" id="spt_id" value="<?= $spt->spt_id ?>" hidden>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_pjb_tugas" class="col-sm-5 col-form-label">Pejabat Pemberi Tugas</label>
                          <div class="col-6">
                            <input class="form-control <?= isset($errors['spt_pjb_tugas']) ? 'is-invalid' : null ; ?>" type="text" name="spt_pjb_tugas" placeholder="Pejabat Pemberi Tugas" id="spt_pjb_tugas" value="<?= $spt->spt_pjb_tugas ?>" readonly>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="spt_uraian" class="col-sm-5 col-form-label">Maksud Perjalanan Dinas</label>
                          <div class="col-6">
                            <textarea class="form-control <?= isset($errors['spt_uraian']) ? 'is-invalid' : null ; ?>" type="text" name="spt_uraian" placeholder="Maksud Perjalanan Dinas" id="spt_uraian" value="<?= $spt->spt_uraian ?>" readonly></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_lama" class="col-sm-5 col-form-label">Lama Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control <?= isset($errors['spt_lama']) ? 'is-invalid' : null ; ?>" type="number" name="spt_lama" placeholder="Lama Perjalanan Dinas" id="spt_lama" value="<?= $spt->spt_lama ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_mulai" class="col-sm-5 col-form-label">Tanggal Mulai Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control <?= isset($errors['spt_mulai']) ? 'is-invalid' : null ; ?>" type="date" name="spt_mulai" placeholder="Tanggal Mulai Perjalanan Dinas" id="spt_mulai" value="<?= $spt->spt_mulai ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_berakhir" class="col-sm-5 col-form-label">Tanggal Berakhir Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control <?= isset($errors['spt_berakhir']) ? 'is-invalid' : null ; ?>" type="date" name="spt_berakhir" placeholder="Tanggal Berakhir Perjalanan Dinas" id="spt_berakhir" value="<?= $spt->spt_berakhir ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_tujuan" class="col-sm-5 col-form-label">Tempat Tujuan Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control <?= isset($errors['spt_tujuan']) ? 'is-invalid' : null ; ?>" type="Text" name="spt_tujuan" placeholder="Tempat Tujuan Perjalanan Dinas" id="spt_tujuan" value="<?= $spt->spt_tujuan ?>" readonly>
                          </div>
                        </div>
                      </div>
                    </div>              
                    <div class="card-footer">
                      <!-- <button type="submit" class="btn btn-primary float-right">Simpan</button> -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                        Tambah Pegawai pelaksana Perjalanan Dinas
                      </button>
                      <a href="<?= site_url('spt'); ?>" class="btn btn-default float-right">Kembali</a>
                    </div>
                    
                  </form>
                </div>
                <div class="card card-info">
                  <div class="card-header">
                    <h5 class="m-0">Pegawai yang melaksanakan Perjalanan Dinas</h5>
                  </div>
                  <div class="card-body">
                    <!-- <h6 class="card-title"></h6> -->
                      <table class="table table-borderer">
                        <thead>
                          <tr>
                            <td>Aksi</td>
                            <td>Nama</td>
                            <td>NIP</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($pelks as $key => $value) { ?>
                          <tr>
                            <td></td>
                              <td><?= $value->pegawai_nama; ?></td>
                              <td><?= $value->pegawai_nip; ?></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('script'); ?>
  <script>
 
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

  </script>
<?= $this->endSection(); ?>
    
<?= $this->section('modalcustome'); ?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?= $title; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('pelaksana/create'); ?>" method="post">
          <?= csrf_field() ?>
            <div class="form-group">
              <input class="form-control"  name = "spt_id" type="text" value="<?= $spt->spt_id ?>" hidden>
            </div>
            <div class="form-group">
              <label>Pilih Nama Pegawai</label>
              <select class="form-control select2" style="width: 100%;" name="pegawai_id">
                <option value="" hidden></option>
                <?php foreach($peg as $key => $value) : ?>
                  <option value="<?= $value->pegawai_id; ?>"><?= $value->pegawai_nama; ?>   (<?= $value->pegawai_nip; ?>)</option>
                <?php endforeach; ?>
              </select>
            </div>
      </div>
      <div class="modal-footer justify-content-between">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
      </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<?= $this->endSection(); ?>
