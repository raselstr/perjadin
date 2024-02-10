
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
                <button type="button" class="btn bg-gradient-primary float-sm-right btn-sm" class="btn btn-primary"  data-toggle="modal" data-target="#form"><i class="fas fa-hand-point-right"> </i> Tambah Menu</button>
                </a>
              </div>
            </div>
          </div>
            <div class="card-body row justify-content-center">
              <div class="col-8">
                  <table id="myTable1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th class="align-middle text-center">No</th>
                        <th class="align-middle text-center">Aksi</th>
                        <th class="align-middle text-center">Kode Jabatan</th>
                        <th class="align-middle text-center">Nama</th>
                        <th class="align-middle text-center">Jabatan</th>
                        <th class="align-middle text-center">NIP</th>
                        <th class="align-middle text-center">Pangkat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ; foreach ($pejabat as $key => $value) : ?>
                      <tr>
                          <td class="align-middle text-center"><?= $no++; ?></td>
                          <td class="align-middle text-center">
                            <button type="button" class="btn bg-gradient-info btn-sm" id="tbledit" data-toggle="modal" data-target="#form" data-pejabatid=<?= $value->pejabat_id; ?>><i class="fas fa-pen"> </i></button>
                            <a href="<?= site_url('pejabatpenandatangan/remove/'.$value->pejabat_id); ?>" type="button" class="btn bg-gradient-danger btn-sm"><i class="fas fa-trash"> </i></a>
                          </td>
                          <td><?= $value->pejabat_id; ?></td>
                          <td><?= $value->pejabat_nama; ?></td>
                          <td class="align-middle text-center"><?= $value->pejabat_namajabatan; ?></td>
                          <td class="align-middle text-center"><?= $value->pejabat_nip; ?></td>
                          <td class="align-middle text-center"><?= $value->pejabat_pangkat; ?></td>
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
  <!-- Modal SPJ Pesawat -->
  <div class="modal fade" id="form">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><?= $title; ?></h4>
        </div>
        <form action="<?=site_url('pejabatpenandatangan/create');?>" method="post" id="menuform">
          <?=csrf_field();?>
          <div class="modal-body">
            <div class="card-body">
              <!-- <p>One fine body&hellip;</p> membuat lambang titik titik-->
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >pejabat Kode</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_id" name="pejabat_id">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Nama pejabat</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_nama" name="pejabat_nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Jabatan</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_namajabatan" name="pejabat_namajabatan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >NIP</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_nip" name="pejabat_nip">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Pangkat/Gol</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_pangkat" name="pejabat_pangkat">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default batalbutton" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary simpanbutton">Simpan</button>
            </div>
          </div>
        </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

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
  <!-- Script Edit dan SImpan SPJ Tiket Pesawat -->
    <script>
      $(document).ready(function(){
        $('[data-target="#form"]').click (function() {
          var pejabatid = $(this).data('pejabatid');
          $('#pejabat_id').val(pejabatid);

          if(pejabatid == null){
            $('#pejabat_nama').val('');

          } else {
            $.ajax({
              type: "get",
              url: "<?=site_url('pejabat/edit/');?>" + pejabatid,
              // data: "data",
              dataType: "json",
              success: function (response) {
                console.log(response);
                $('#pejabat_nama').val(response.pejabat_nama);
              }
            });
          }
        });

        $('#menuform').submit(function(e){
          e.preventDefault();
          var data = new FormData(this);
          // console.log(data);

          $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: data,
            processData: false,
            contentType: false,
            beforeSend:function(){
                  $('.simpanbutton').attr('disabled', 'disabled');
                  $('.simpanbutton').html('<i class="fa fa-spin fa-spinner"></i>');
              },
              complete: function(){
                  $('.simpanbutton').removeAttr('disabled');
                  $('.simpanbutton').html('Simpan');
              },
            success: function (response) {
              console.log(response);
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: response.message,
                  showConfirmButton: false,
                  timer: 2000
                }).then(function(){
                  $('#form').hide('2000');
                  location.reload();

                });
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika terjadi
                console.error();
            }
          });
        });
        $('.batalbutton').on('click', function () {
          location.reload();
        });
      });


    </script>
  <!-- End Script Edit dan SImpan SPJ Tiket Pesawat -->
<?= $this->endSection() ?>