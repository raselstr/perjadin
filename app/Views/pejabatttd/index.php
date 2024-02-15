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
                        <th class="align-middle text-center">status</th>
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
                          <td class="align-middle text-center">
                            <input type="checkbox" name="menu_active" value="<?= $value->pejabat_id; ?>" class="status-checkbox" <?= $value->pejabat_aktif == 1 ? "checked" : null; ?> data-toggle="switchbutton" data-onlabel="Aktif" data-offlabel="Tidak  ." data-onstyle="success" data-offstyle="danger" data-size="sm">
                          </td>
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
              <input type="text" class="form-control" id="pejabat_id" name="pejabat_id" hidden>
              <div class="form-group row">
                  <label for="pejabat_kode" class="col-sm-4 col-form-label">Kode Jabatan</label>
                  <div class="col">
                    <select name="pejabat_kode" id="pejabat_kode" class="form-control">
                      <option value="">Kode pejabat ...!</option>
                      <?php foreach ($kodejab as $key => $isi) : ?>
                        <option value="<?= $key ?>" <?= 'pejabat_kode' == $key ? 'selected' : null ?>><?= $isi; ?></option>
                        <?php endforeach ?>
                      </select>
                      <div class="invalid-feedback errorpejabat_kode"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Nama pejabat</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_nama" name="pejabat_nama">
                    <div class="invalid-feedback errorpejabat_nama"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Jabatan</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_namajabatan" name="pejabat_namajabatan">
                    <div class="invalid-feedback errorpejabat_namajabatan"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >NIP</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_nip" name="pejabat_nip">
                    <div class="invalid-feedback errorpejabat_nip"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" >Pangkat/Gol</label>
                  <div class="col">
                    <input type="text" class="form-control" id="pejabat_pangkat" name="pejabat_pangkat">
                    <div class="invalid-feedback errorpejabat_pangkat"></div>
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
            $('#pejabat_kode').val('');
            $('#pejabat_nama').val('');
            $('#pejabat_namajabatan').val('');
            $('#pejabat_nip').val('');
            $('#pejabat_pangkat').val('');

          } else {
            $.ajax({
              type: "get",
              url: "<?=site_url('pejabatpenandatangan/edit/');?>" + pejabatid,
              // data: "data",
              dataType: "json",
              success: function (response) {
                console.log(response);
                $('#pejabat_kode').val(response.pejabat_kode);
                $('#pejabat_nama').val(response.pejabat_nama);
                $('#pejabat_namajabatan').val(response.pejabat_namajabatan);
                $('#pejabat_nip').val(response.pejabat_nip);
                $('#pejabat_pangkat').val(response.pejabat_pangkat);
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
              if(response.error) {
                if(response.message.pejabat_kode){
                        $('#pejabat_kode').addClass('is-invalid');
                        $('.errorpejabat_kode').html(response.message.pejabat_kode);
                    } else {
                        $('#pejabat_kode').removeClass('is-invalid');
                        $('.errorpejabat_kode').html('');
                }
                if(response.message.pejabat_nama){
                        $('#pejabat_nama').addClass('is-invalid');
                        $('.errorpejabat_nama').html(response.message.pejabat_nama);
                    } else {
                        $('#pejabat_nama').removeClass('is-invalid');
                        $('.errorpejabat_nama').html('');
                }
                if(response.message.pejabat_namajabatan){
                        $('#pejabat_namajabatan').addClass('is-invalid');
                        $('.errorpejabat_namajabatan').html(response.message.pejabat_namajabatan);
                    } else {
                        $('#pejabat_namajabatan').removeClass('is-invalid');
                        $('.errorpejabat_namajabatan').html('');
                }
                if(response.message.pejabat_nip){
                        $('#pejabat_nip').addClass('is-invalid');
                        $('.errorpejabat_nip').html(response.message.pejabat_nip);
                    } else {
                        $('#pejabat_nip').removeClass('is-invalid');
                        $('.errorpejabat_nip').html('');
                }
                if(response.message.pejabat_pangkat){
                        $('#pejabat_pangkat').addClass('is-invalid');
                        $('.errorpejabat_pangkat').html(response.message.pejabat_pangkat);
                    } else {
                        $('#pejabat_pangkat').removeClass('is-invalid');
                        $('.errorpejabat_pangkat').html('');
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
                  $('#form').hide('2000');
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
        $('.batalbutton').on('click', function () {
          location.reload();
        });
      });


    </script>
  <!-- End Script Edit dan SImpan SPJ Tiket Pesawat -->

 <!-- Togle Aktiv -->
    <script>
      $(document).ready(function () {
        $('input[name="menu_active"]').on('change', function () {
            var checkboxValue = $(this).val();
            var isChecked = $(this).is(':checked');
            
            if (isChecked) {
                console.log(checkboxValue);
                $.ajax({
                  type: "POST",
                  url: "<?= site_url('pejabatpenandatangan/updatetoggle'); ?>",
                  data: {pejabat_id:checkboxValue},
                  // dataType: "dataType",
                  success: function (response) {
                    
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Pejabat Penandatangan Aktif',
                    }).then(function(){
                      location.reload();
                    });
                    // location.reload();
                  },
                  error: function (error) {
                      // Handle error, if any
                      console . error(error);
                  }
                });
            } else {
                console.log(checkboxValue);
                $.ajax({
                  type: "POST",
                  url: "<?= site_url('pejabatpenandatangan/updatetoggle'); ?>",
                  data: {pejabat_id:checkboxValue},
                  // dataType: "dataType",
                  success: function (response) {
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Pejabat Penandatangan Tidak Aktif',
                    }).then(function(){
                      location.reload();
                    });
                    // location.reload();
                    // alert('Status item berhasil diubah');
                  },
                  error: function (error) {
                      // Handle error, if any
                      console . error(error);
                  }
                });
            }
        });
      });
    </script>
  <!--  -->
<?= $this->endSection() ?>