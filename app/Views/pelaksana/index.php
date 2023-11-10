<?= $this->extend('layout/default'); ?>

<?= $this->section('stylesheet'); ?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
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
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>
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
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-8">
                    <h5 class="m-0"><?= $title; ?></h5>
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
              </div>
              <div class="flash-data" data-flashdata="<?= session()->getflashdata('info'); ?>"></div>

              <div class="card-body">
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">No</th>
                      <th rowspan="2" class="align-middle text-center">Pejabat Pemberi Tugas</th>
                      <th colspan="3" class="align-middle text-center">Data Perjalanan Dinas</th>
                      <th rowspan="2" class="align-middle text-center">SPT</th>
                      <th rowspan="2" class="align-middle text-center">SPPD</th>
                    </tr>
                    <tr>
                      <th class="align-middle text-center">Uraian Perjalanan</th>
                      <th class="align-middle text-center">Lama Perjalanan</th>
                      <th class="align-middle text-center">Tempat Tujuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($spt as $key => $value) { ?>
                        <tr>
                          <td class="align-middle text-center"><?= $no++ ?></td>
                          <td class="align-middle"><?= $value->spt_pjb_tugas ?></td>
                          <td class="align-middle"><?= $value->spt_uraian ?></td>
                          <td class="align-middle text-center"><?= $value->spt_lama ?></td>
                          <td class="align-middle"><?= $value->lokasiperjadin_nama ?></td>
                          <td class="align-middle text-center">
                            <a href="<?= site_url('pelaksana/sptpdf/'.$value->spt_id); ?>" id="myLink" class="btn btn-icon bg-gradient-sm btn-primary"><i class="fas fa-print"></i></a>
                          </td>
                          <td class="align-middle text-center">
                            <a href="<?= site_url('pelaksana/sppdpdf/'.$value->spt_id); ?>" target="_blank" class="btn btn-icon bg-gradient-sm btn-success"><i class="fas fa-print"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Pangkat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot> -->
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
  </div>
    <!-- /.content -->

   
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script>

    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
  <script>

    const flashData = $('.flash-data').data('flashdata');
    // console.log(flashData);
    // $("#myLink").click(function(){
      if(flashData){
          Swal.fire({
          icon: "error",
          title: "Oops...",
          text: flashData,
        });
      } else {
            $("#myLink").attr("target", "_blank");
          
    }

    

  </script>
<?= $this->endSection() ?>