
<?= $this->extend('layout/default'); ?>

<?= $this->section('stylesheet'); ?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Bootstrap Switch Button -->
  <link rel="stylesheet" href="plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch-button.min.css">

<?= $this->endSection(); ?>

<?= $this->section('scriptplugin'); ?>
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

  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- Bootstrap Switch Button -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch-button.min.js"></script>

  
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
      </div>
      <div class="col">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-8">
                <h5 class="card-title"><?= $title; ?></h5>
              </div>
              <div class="col-sm-4">
              </div>
            </div>
          </div>
        </div>
        <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! ada masalah.</h3>

          <p>
            Halaman yang anda buka, tidak ditemukan atau bukan hak anda untuk membuka halaman tersebut.
            <br>Silahkan, kembali <a href="<?= site_url('/'); ?>">ke dashboard</a>
          </p>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->
      </div>
    </div>
  </div>
  
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  
  
<?= $this->endSection() ?>