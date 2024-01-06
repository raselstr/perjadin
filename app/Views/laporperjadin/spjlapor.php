
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
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Id Pelaksana</label>
              <div class="col">
                <input type="text" class="form-control" name="pelaksana_id" value="<?= $data[0]->spt_nomor; ?>" >
                <textarea type="text" class="form-control" name="pelaksana_id" ><?= $data[0]->spt_uraian; ?>" </textarea>
              </div>
              <div class="col">
                <input type="text" class="form-control" name="pelaksana_id" value="<?=date('d F Y', strtotime($data[0]->spt_tgl));?>" >
                <input type="text" class="form-control" name="pelaksana_id" value="<?= $data[0]->lokasiperjadin_nama; ?>" >
                <input type="text" class="form-control" name="pelaksana_id" value="<?=date('d F Y', strtotime($data[0]->spt_mulai));?>  s.d  <?=date('d F Y', strtotime($data[0]->spt_berakhir));?>" >
              </div>
            </div>
            
            <!-- <div class="form-group row"> -->
              <a href="<?= site_url('laporjadin'); ?>" type="button" class="btn bg-gradient-warning float-sm-left" ><i class="fas fa-hand-point-left"> </i>   Kembali</a>
              <button type="button" class="btn bg-gradient-primary float-sm-right"  class="btn btn-primary"  data-toggle="modal" data-target="#taksispj"><i class="fas fa-save"> </i>   Simpan Laporan</button>
              <!-- </div> -->
            </div>
            <div class="card-footer">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Id Pelaksana</label>
                <div class="col">
                  <input type="text" class="form-control" name="pelaksana_id" value="<?= $data[0]->spt_id; ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Dasar No. DPA Kegiatan</label>
                  <div class="col">
                    <input type="text" class="form-control" name="pelaksana_id" value="<?= $data[0]->lokasiperjadin_nama; ?>" >
                  </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Pembukaan</label>
                  <div class="col">
                    <textarea id="summernote1">
                      Ketik <em>Pejabat yang ditemui saat </em> <u> Konsultasi beserta jabatannya</u> <strong>Disini</strong>
                      <br>
                      <i>Seret garis 3 ditengah bawah kotak ini untuk memperbesar area ketik dan teks ini bisa dihapus</i>
                    </textarea>
                  </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Hasil Konsultasi</label>
                  <div class="col">
                    <textarea id="summernote2">
                      Ketik <em>hasil</em> <u>Konsultasi</u> <strong>Disini</strong>
                      <br>
                      <i>Seret garis 3 ditengah bawah kotak ini untuk memperbesar area ketik dan teks ini bisa dihapus</i>
                    </textarea>
                  </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Penutup</label>
                  <div class="col">
                    <textarea id="summernote3">
                      Ketik <em>hasil</em> <u>Konsultasi</u> <strong>Disini</strong>
                      <br>
                      <i>Seret garis 3 ditengah bawah kotak ini untuk memperbesar area ketik dan teks ini bisa dihapus</i>
                    </textarea>
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

<?=$this->endSection()?>