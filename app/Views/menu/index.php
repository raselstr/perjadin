
<?= $this->extend('layout/default'); ?>

<?= $this->section('stylesheet'); ?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

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
                <a href="<?= site_url('menu/new'); ?>" type="button" class="btn bg-gradient-primary float-right">
                  <i class="fa fa-plus"></i>  Tambah Menu
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="card-body">
              <table id="myTable1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th class="align-middle text-center">No</th>
                    <th class="align-middle text-center">Aksi</th>
                    <th class="align-middle text-center">Keterangan menu</th>
                    <th class="align-middle text-center">Gambar</th>
                    <th class="align-middle text-center">Icon</th>
                    <th class="align-middle text-center">Lokasi Tujuan</th>
                    <th class="align-middle text-center">Aktif</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ; foreach ($menu as $key => $value) : ?>
                  <tr>
                      <td class="align-middle text-center"><?= $no++; ?></td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn bg-gradient-info btn-sm"><i class="fas fa-pen"> </i></button>
                        <a href="" type="button" class="btn bg-gradient-danger btn-sm"><i class="fas fa-trash"> </i></a>
                      </td>
                      <td><?= $value->menu_nama; ?></td>
                      <td><?= $value->menu_icon; ?></td>
                      <td class="align-middle text-center"><i class="<?= $value->menu_icon; ?>"></i></td>
                      <td><?= $value->menu_link; ?></td>
                      <td class="align-middle text-center"><?= $value->menu_active; ?></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script>
    $(function () {
      $("#myTable1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
      })
    });
  </script>
<?= $this->endSection() ?>