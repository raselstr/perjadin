
<?= $this->extend('layout/default'); ?>

<?= $this->section('stylesheet'); ?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
              <!-- <div class="flash-data" data-flashdata="<?= session()->getflashdata('info'); ?>"></div> -->

              <div class="card-body">
                <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">No</th>
                      <th rowspan="2" class="align-middle text-center">Input SPJ</th>
                      <th rowspan="2" class="align-middle text-center">Nomor SPT</th>
                      <th rowspan="2" class="align-middle text-center">Nama Pegawai <br> NIP</th>
                      <th rowspan="2" class="align-middle text-center">Uraian</th>
                      <th colspan="5" class="align-middle text-center">Hotel</th>
                      <th rowspan="2" class="align-middle text-center">Tanggal Upload</th>
                    </tr>
                    <tr>
                      <th class="align-middle text-center">Nama</th>
                      <th class="align-middle text-center">No. Kamar</th>
                      <th class="align-middle text-center">Type Kamar</th>
                      <th class="align-middle text-center">Foto</th>
                      <th class="align-middle text-center">Bill</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($spj as $key => $value) { ?>
                        <tr>
                          <td class="align-middle text-center"><?= $no++ ?></td>
                          <td class="align-middle text-center">
                            <div class="d-grid gap-2">
                              <button type="button" name="spj" id="spj" data-idspt="<?= $value->spt_id; ?>" data-idpegawai="<?= $value->pegawai_id; ?>" data-namapegawai="<?= $value->pegawai_nama; ?>" data-nospt="<?= $value->spt_nomor; ?>"class="btn btn-primary"  data-toggle="modal" data-target="#hotelspj"><i class="fas fa-hand-point-right"></i></button>
                            </div>
                          </td>
                          <td class="align-middle"><?= $value->spt_nomor ?></td>
                          <td class="align-middle"><?= $value->pegawai_nama ?><br><?= $value->pegawai_nip ?></td>
                          <td class="align-middle"><?= $value->spt_uraian ?></td>
                          <td class="align-middle text-center"></td>
                          <td class="align-middle"></td>
                          <td class="align-middle text-center"></td>
                          <td class="align-middle text-center"></td>
                          <td class="align-middle text-center"></td>
                          <td class="align-middle text-center"></td>
                    <?php } ?>
                  </tbody>
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

<!-- Modal -->
<div class="modal fade" id="hotelspj" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">SPJ HOTEL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url("spjhotel/create"); ?>" method="post" enctype="multipart/form-data" id="formhotel">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group row">
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_id" name="hotel_id">
                <input type="text" class="form-control" id="hotel_idspt" name="hotel_idspt">
                <input type="text" class="form-control" id="hotel_idpegawai" name="hotel_idpegawai">
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_nospt" class="col-sm-4 col-form-label">Nomor SPT</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_nospt" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_namapegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_namapegawai" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_nama" class="col-sm-4 col-form-label">Nama Hotel</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_nama" name="hotel_nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_nokamar" class="col-sm-4 col-form-label">Nomor Kamar Hotel</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_nokamar" name="hotel_nokamar">
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_typekamar" class="col-sm-4 col-form-label">Type Kamar</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_typekamar" name="hotel_typekamar">
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_foto" class="col-sm-4 col-form-label">Foto Hotel Depan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_foto" name="hotel_foto">
              </div>
            </div>
            <div class="form-group row">
              <label for="hotel_bill" class="col-sm-4 col-form-label">Scan Bill Hotel</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="hotel_bill" name="hotel_bill">
              </div>
            </div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary simpanhotel">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script>
    $(function () {
      $("#myTable").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
      })
    });
  </script>
  <script>

  </script>
  <script>
    $(document).ready(function(){
      $('[data-target="#hotelspj"]').click(function() {
        var idspt = $(this).data('idspt');
        var idpegawai = $(this).data('idpegawai');
        var namapegawai = $(this).data('namapegawai');
        var nospt = $(this).data('nospt');

        $('#hotel_idspt').val(idspt);
        $('#hotel_idpegawai').val(idpegawai);
        $('#hotel_namapegawai').val(namapegawai);
        $('#hotel_nospt').val(nospt);

      });

      $('#formhotel').submit(function(e){
        e.preventDefault();
        var idspt = $('#hotel_idspt').val();
        var idpegawai = $('#hotel_idpegawai').val();
        var data = {
          'idspt'     : idspt,
          'idpegawai' : idpegawai,
          'formdata'  : $("#formhotel").serialize(),//mengambil seluruh data dari form termasuk name dan value
        };
        console.log($("#formhotel").serialize());
  
        $.ajax({
          type: "post",
          url: $(this).attr('action'),
          data: data,
          dataType: 'json',
          beforeSend:function(){
                $('.simpanhotel').attr('disabled', 'disabled');
                $('.simpanhotel').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            complete: function(){
                $('.simpanhotel').removeAttr('disabled');
                $('.simpanhotel').html('Simpan');
            },
          success: function (response) {
            console.log(response);
            
          },
          error: function(xhr, status, error) {
              // Tangani kesalahan jika terjadi
              console.error(error);
          }
        });
      });
    });
  </script>
<?= $this->endSection() ?>