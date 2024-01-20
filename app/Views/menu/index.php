
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
                <button type="button" class="btn bg-gradient-primary float-sm-right" class="btn btn-primary"  data-toggle="modal" data-target="#form"><i class="fas fa-hand-point-right"> </i> Tambah Menu</button>
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
                        <button type="button" class="btn bg-gradient-info btn-sm" id="tbledit" data-toggle="modal" data-target="#form" data-menuid=<?= $value->menu_id; ?>><i class="fas fa-pen"> </i></button>
                        <a href="<?= site_url('menu/remove/'.$value->menu_id); ?>" type="button" class="btn bg-gradient-danger btn-sm"><i class="fas fa-trash"> </i></a>
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
  <!-- Modal SPJ Pesawat -->
  <div class="modal fade" id="form">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SPJ Pesawat</h4>
        </div>
        <form action="<?=site_url('menu/create');?>" method="post" id="menuform">
          <?=csrf_field();?>
          <div class="modal-body">
            <div class="card-body">
              <!-- <p>One fine body&hellip;</p> membuat lambang titik titik-->
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" hidden>menu id</label>
                  <div class="col">
                    <input type="text" class="form-control" id="menu_id" name="menu_id" hidden>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Nama Menu</label>
                  <div class="col">
                    <input type="text" class="form-control" id="menu_nama" name="menu_nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Icon Menu</label>
                  <div class="col">
                    <input type="text" class="form-control" id="menu_icon" name="menu_icon">
                    <div class="invalid-feedback errormenu_icon"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tujuan Halaman</label>
                  <div class="col">
                    <input type="text" class="form-control" id="menu_link" name="menu_link">
                    <div class="invalid-feedback errormenu_link"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default batalpesawat" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary simpanmenu">Simpan</button>
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
          var menuid = $(this).data('menuid');
          $('#menu_id').val(menuid);

          if(menuid == null){
            $('#menu_nama').val('');
            $('#menu_icon').val('');
            $('#menu_link').val('');
            $('#pesawatspj').show();

          } else {
            $.ajax({
              type: "get",
              url: "<?=site_url('menu/edit/');?>" + menuid,
              // data: "data",
              dataType: "json",
              success: function (response) {
                console.log(response);
                $('#menu_nama').val(response.menu_nama);
                $('#menu_icon').val(response.menu_icon);
                $('#menu_link').val(response.menu_link);
                $('#pesawatspj').show();
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
                  $('.simpanmenu').attr('disabled', 'disabled');
                  $('.simpanmenu').html('<i class="fa fa-spin fa-spinner"></i>');
              },
              complete: function(){
                  $('.simpanmenu').removeAttr('disabled');
                  $('.simpanmenu').html('Simpan');
              },
            success: function (response) {
              console.log(response);
              if(response.error) {
                if(response.message.spjpesawat_jenis){
                        $('#spjpesawat_jenis').addClass('is-invalid');
                        $('.errorspjpesawat_jenis').html(response.message.spjpesawat_jenis);
                    } else {
                        $('#spjpesawat_jenis').removeClass('is-invalid');
                        $('.errorspjpesawat_jenis').html('');
                }
                if(response.message.menu_icon){
                        $('#menu_icon').addClass('is-invalid');
                        $('.errormenu_icon').html(response.message.menu_icon);
                    } else {
                        $('#menu_icon').removeClass('is-invalid');
                        $('.errormenu_icon').html('');
                }
                if(response.message.menu_link){
                        $('#menu_link').addClass('is-invalid');
                        $('.errormenu_link').html(response.message.menu_link);
                    } else {
                        $('#menu_link').removeClass('is-invalid');
                        $('.errormenu_link').html('');
                }
                
              } else {
                console.log(response);
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: response.message,
                  showConfirmButton: false,
                  timer: 2000
                }).then(function(){
                  $('#pesawatspj').hide('2000');
                  location.reload();

                });
              }
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika terjadi
                console.error();
            }
          });
        });
        $('.batalpesawat').on('click', function () {
          location.reload();
        });
      });


    </script>
  <!-- End Script Edit dan SImpan SPJ Tiket Pesawat -->

<?= $this->endSection() ?>