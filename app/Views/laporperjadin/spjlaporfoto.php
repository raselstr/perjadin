
<?=$this->extend('layout/default');?>

<?=$this->section('stylesheet');?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

<?=$this->endSection();?>

<?=$this->section('scriptplugin');?>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>

 <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>

<?=$this->endSection();?>

<?=$this->section('content')?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <?=$this->include('layout/contenheader');?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <?=$this->include('layout/infobox');?>
      </div>
      <div class="col">
        <div class="card card-primary card-outline">
          <div class="card-header">
              <h5 class="card-title"><?=$title;?></h5>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 20px">#</th>
                  <th>Uraian</th>
                  <th style="width: 70%">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Nomor SPT dan SPD</td>
                  <td><?= $data[0]->spt_nomor; ?> <br> <?= $data[0]->sppd_nomor; ?></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Tanggal SPT dan SPD</td>
                  <td><?=date('d F Y', strtotime($data[0]->spt_tgl));?></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Tanggal Berangkat dan Kembali</td>
                  <td><?=date('d F Y', strtotime($data[0]->spt_mulai));?> &nbsp;&nbsp;&nbsp; s.d &nbsp;&nbsp;&nbsp; <?=date('d F Y', strtotime($data[0]->spt_berakhir));?></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Lokasi Perjalanan Dinas</td>
                  <td>
                    <?= $data[0]->lokasiperjadin_nama; ?>
                  </td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Tujuan Perjaanan Dinas</td>
                  <td><?= $data[0]->spt_uraian; ?> ke <?= $data[0]->spt_tempat; ?></td>
                </tr>
                <tr>
                  <td></td><td></td><td></td>
                </tr>
              </tbody>
            </table>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Id Laporjadin</label>
              <div class="col">
                <input type="text" class="form-control" name="laporjadin_id" value="<?= $data[0]->laporjadin_id; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputFile" class="col-sm-2 col-form-label">Foto Kegiatan<code>*</code> </label>
              <div class="col-sm-3">
                <div class="input-group">
                  <input class="custom-file-input" type="file" name="laporjadin_foto1" id="laporjadin_foto1">
                  <label class="custom-file-label" for="custom-file-label" id="nama-foto1">Pilih Foto</label>
                  <div class="invalid-feedback errorspjtaksi_fototiket"></div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="input-group">
                  <input class="custom-file-input" type="file" name="laporjadin_foto2" id="laporjadin_foto2">
                  <label class="custom-file-label" for="custom-file-label" id="nama-foto2">Pilih Foto</label>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="input-group">
                  <input class="custom-file-input" type="file" name="laporjadin_foto2" id="laporjadin_foto3">
                  <label class="custom-file-label" for="custom-file-label" id="nama-foto3">Pilih Foto</label>
                </div>
              </div>
            </div>
            <a href="<?= site_url('laporjadin'); ?>" type="button" class="btn bg-gradient-warning float-sm-left" ><i class="fas fa-hand-point-left"> </i>   Kembali</a>
            <button type="submit" class="btn bg-gradient-primary float-sm-right"  class="btn btn-primary" ><i class="fas fa-save"> </i>   Simpan Laporan</button>
          </div>
          <div class="card-footer">
            <div class="row mt-4">
              <div class="col-sm-4">
                <div class="position-relative" style="height: 180px">
                  <img src="dist/img/photo1.png" alt="Photo 1" class="img-fluid">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                      Foto 1
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="position-relative" style="height: 180px">
                  <img src="dist/img/photo1.png" alt="Photo 1" class="img-fluid">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                      Foto 1
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="position-relative" style="height: 180px">
                  <img src="dist/img/photo1.png" alt="Photo 1" class="img-fluid">
                  <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-success text-lg">
                      Foto 1
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  



<?=$this->endSection()?>

<?=$this->section('script')?>
  <script>
    $(function () {
      // Summernote
      $('#summernote1').summernote()
      $('#summernote2').summernote()
      $('#summernote3').summernote()
    });
  </script>

<!-- Upload Foto Kegiatan -->
  <script>
    $(document).ready(function(){
      $('#laporjadin_foto1').on('change', function(){
        var fileName = $(this).val().split('\\').pop();
        $('#nama-foto1').text(fileName);
      });
    });
  </script>
<!-- End Upload Foto Kegiatan -->
<?=$this->endSection()?>