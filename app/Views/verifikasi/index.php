
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
      <div class="flash-data" data-flashdata="<?= session()->getflashdata('info'); ?>"></div>
      <div class="col">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <div class="row">
              <h5 class="card-title"><?= $title; ?></h5>
            </div>
          </div>
          <div class="card-body">
            <div class="card-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" class="align-middle text-center">No</th>
                    <th rowspan="2" class="align-middle text-center">Aksi</th>
                    <th rowspan="2" class="align-middle text-center">SPT - SPD - Tujuan Perjalanan Dinas</th>
                    <th colspan="4" class="align-middle text-center">Validasi Pertanggung Jawaban</th>
                  </tr>
                  <tr>
                    <th class="align-middle text-center">Hotel</th>
                    <th class="align-middle text-center">Pesawat PP</th>
                    <th class="align-middle text-center">Taksi PP</th>
                    <th class="align-middle text-center">Pelaksanaan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data as $key => $value) { ?>
                      <tr>
                        <td class="align-middle text-center"><?= $no++ ?></td>
                        <td class="align-middle text-center">
                          <a href="<?= site_url('verifikasi/form/'.$value->spt_id); ?>" type="button" class="btn bg-secondary" title="Input Laporan Hasil"><i class="fas fa-newspaper"></i>  </a>
                        </td>
                        <td class="align-middle">No. SPT : <?= $value->spt_nomor ?><br>No. SPD : <?= $value->sppd_nomor ?><br>Tanggal : <?= date('d F Y',strtotime($value->spt_tgl)) ?><br>Uraian : <?= $value->spt_uraian ?></td>
                        <td class="align-middle">
                          <?php 
                            $db = \Config\Database::connect();
                            $group = $db->table('spjhotels as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjhotel_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum = $group->countAllResults();
                          ?>
                          <button type="button" class="btn btn-block btn-outline-danger btn-xs" >Total : <?= $sum; ?></button>
                          <?php 
                            $db = \Config\Database::connect();
                            $group = $db->table('spjhotels as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjhotel_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('a.spjhotel_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum2 = $group->countAllResults();
                          ?>
                          <button type="button" class="btn btn-block btn-outline-success btn-xs">Validasi : <?= $sum2; ?></button>
                        </td>
                        <td class="align-middle text-center">
                          <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('spjpesawats as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum = $group->countAllResults();
                            ?>
                              <button type="button" class="btn btn-block btn-outline-danger btn-xs" >Total : <?=$sum;?></button>
                            <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('spjpesawats as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjpesawat_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('a.spjpesawat_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum2 = $group->countAllResults();
                            ?>
                              <button type="button" class="btn btn-block btn-outline-success btn-xs">Validasi : <?=$sum2;?></button>
                        </td>
                        <td class="align-middle">
                          <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('spjtaksis as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjtaksi_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum = $group->countAllResults();
                            ?>
                              <button type="button" class="btn btn-block btn-outline-danger btn-xs" >Total : <?=$sum;?></button>
                            <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('spjtaksis as a');
                            $group->join('pelaksanas As b', 'b.pelaksana_id = a.spjtaksi_pelaksanaid', 'RIGHT');
                            $group->join('spts As c', 'c.spt_id = b.spt_id');
                            $group->where('c.spt_verif', 1);
                            $group->where('a.spjtaksi_verif', 1);
                            $group->where('c.spt_id', $value->spt_id);
                            $sum2 = $group->countAllResults();
                            ?>
                              <button type="button" class="btn btn-block btn-outline-success btn-xs">Validasi : <?=$sum2;?></button>
                        </td>
                        <td class="align-middle text-center">
                          <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('laporjadins as a');
                            $group->join('spts As c', 'c.spt_id = a.laporjadin_sptid');
                            $group->where('c.spt_verif', 1);
                            $group->where('a.laporjadin_sptid', $value->spt_id);
                            $sum = $group->countAllResults();
                          ?>
                            <button type="button" class="btn btn-block btn-outline-danger btn-xs" >Total : <?=$sum;?></button>
                          <?php
                            $db = \Config\Database::connect();
                            $group = $db->table('laporjadins as a');
                            $group->join('spts As c', 'c.spt_id = a.laporjadin_sptid');
                            $group->where('c.spt_verif', 1);
                            $group->where('a.laporjadin_verif', 1);
                            $group->where('a.laporjadin_sptid', $value->spt_id);
                            $sum2 = $group->countAllResults();
                          ?>
                            <button type="button" class="btn btn-block btn-outline-success btn-xs">Validasi : <?=$sum2;?></button>

                        </td>
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
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if(flashData){
      Swal.fire({
        position: "center",
        icon: "success",
        title: flashData,
        showConfirmButton: false,
        timer: 2000
      });
    }
  </script>

  <!-- Script Hapus -->
    <script>
      $('.tombol-hapus').on('click', function(e){
        e.preventDefault();

        const href = $(this).attr('href');

        Swal.fire({
          title: "Apakah Anda yakin",
          text: "data akan dihapus permanen",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Hapus Data",
        }).then((result) => {
          if (result.isConfirmed) {
            document.location.href = href;
          }
        });
      });

    </script>
  <!-- End Script Hapus -->
<?= $this->endSection() ?>