<?= $this->extend('layout/default'); ?>


<?= $this->section('stylesheet'); ?>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
  <!-- Bootstrap Switch Button -->
  <link rel="stylesheet" href="plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch-button.min.css">
<?= $this->endSection(); ?>



<?= $this->section('scriptplugin'); ?>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>

  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>

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
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                    <a href="<?= site_url('spt'); ?>" class="btn btn-danger float-right">Kembali</a>
                  </div>
                  
                  

                    
                    <div class="card-body row justify-content-center">
                      <div class="col-8">
                        <div class="form-group row">
                          <div class="col">
                            <input type="text" name="spt_id" placeholder="Tahun" id="spt_id" value="<?= $spt->spt_id ?>" hidden>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_pjb_tugas" class="col-sm-5 col-form-label">Pejabat Pemberi Tugas</label>
                          <div class="col-6">
                            <input class="form-control" type="text" name="spt_pjb_tugas" placeholder="Pejabat Pemberi Tugas" id="spt_pjb_tugas" value="<?= $spt->spt_pjb_tugas ?>" readonly>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="spt_uraian" class="col-sm-5 col-form-label">Maksud Perjalanan Dinas</label>
                          <div class="col-6">
                            <textarea class="form-control" type="text" name="spt_uraian" placeholder="Maksud Perjalanan Dinas" id="spt_uraian" value="<?= $spt->spt_uraian ?>" readonly></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_lama" class="col-sm-5 col-form-label">Lama Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control" type="number" name="spt_lama" placeholder="Lama Perjalanan Dinas" id="spt_lama" value="<?= $spt->spt_lama ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_mulai" class="col-sm-5 col-form-label">Tanggal Mulai Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control" type="date" name="spt_mulai" placeholder="Tanggal Mulai Perjalanan Dinas" id="spt_mulai" value="<?= $spt->spt_mulai ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_berakhir" class="col-sm-5 col-form-label">Tanggal Berakhir Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control" type="date" name="spt_berakhir" placeholder="Tanggal Berakhir Perjalanan Dinas" id="spt_berakhir" value="<?= $spt->spt_berakhir ?>" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spt_tujuan" class="col-sm-5 col-form-label">Tempat Tujuan Perjalanan Dinas</label>
                          <div class="col-6">
                            <input class="form-control" type="Text" name="spt_tujuan" placeholder="Tempat Tujuan Perjalanan Dinas" id="spt_tujuan" value="<?= $spt->spt_tujuan ?>" readonly>
                          </div>
                        </div>
                      </div>
                    </div>              
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-6">
                          <!-- <button type="submit" class="btn btn-primary float-right">Simpan</button> -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Tambah Pegawai pelaksana Perjalanan Dinas
                          </button>
                        </div>
                        <div class="col-6 float-right">
                          <?php if(session('error')) : ?>
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <!-- A simple success alert—check it out! -->
                                <?= session('error'); ?>
                              </div> 
                          <?php endif ?>
                          <?php if(session('berhasil')) : ?>
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <!-- A simple success alert—check it out! -->
                                <?= session('berhasil'); ?>
                              </div> 
                          <?php endif ?>
                        </div>
                      </div>
                    </div>
                    
                
                </div>
                <div class="card card-info ">
                  <div class="card-header">
                    <h5 class="m-0">Pegawai yang melaksanakan Perjalanan Dinas</h5>
                    
                  </div>
                  <div class="card-body row justify-content-center">
                    <div class="col-8">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <td class="align-middle text-center">Aksi</td>
                            <td class="align-middle text-center">Nama</td>
                            <td class="align-middle text-center">NIP</td>
                            <td class="align-middle text-center">Utama/Pengikut</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($pelks as $key => $value) { ?>
                            <tr>
                              <td class="align-middle text-center"><a href="<?= site_url('pelaksana/remove/'.$value->pelaksana_id); ?>" class="btn btn-icon btn-sm btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a></td>
                              <td><?= $value->pegawai_nama; ?></td>
                              <td class="align-middle text-center"><?= $value->pegawai_nip; ?></td>
                              <td class="align-middle text-center">
                                <form id="statusForm">
                                      <input type="checkbox" name="pelaksana_id" value="<?= $value->pelaksana_id; ?>" class="status-checkbox" <?= $value->pelaksana_utama == 1 ? "checked" : null; ?> data-toggle="switchbutton" data-onlabel="Utama" data-offlabel="Pengikut" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                </form>
                                <!-- <form action="<?= site_url('pelaksana/updatetoggle/'.$value->pelaksana_id); ?>" method="post">
                                  <input name="pelaksana_id" value="<?= $value->pelaksana_id ?>">
                                  <input name="spt_id" value="<?= $value->spt_id ?>">
                                  <input name="pegawai_id" value="<?= $value->pegawai_id ?>"> 
                                  <input type="checkbox" name = 'pelaksana_utama' data-toggle="switchbutton" <?= $value->pelaksana_utama == '1' ? 'checked' : null; ?> data-onlabel="Utama" data-offlabel="Pengikut" data-onstyle="success" data-offstyle="danger" data-size="sm" onChange='submit();'>
                                </form> -->
                              </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-primary float-right">Simpan</button> -->
                    <a href="<?= site_url('spt'); ?>" class="btn btn-danger float-right">Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('script'); ?>
  <script>
 
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

  </script>
  
<?= $this->endSection(); ?>
    
<?= $this->section('modalcustome'); ?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?= $title; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('pelaksana/create'); ?>" method="post">
          <?= csrf_field() ?>
            <div class="form-group">
              <input class="form-control"  name = "spt_id" type="text" value="<?= $spt->spt_id ?>" hidden>
            </div>
            <div class="form-group">
              <label>Pilih Nama Pegawai</label>
              <select class="form-control select2" style="width: 100%;" name="pegawai_id" id="pegawai_id">
                <option value="">Pilih Pegawai ...</option>
                <?php foreach($peg as $key => $value) : ?>
                  <option value="<?= $value->pegawai_id; ?>"><?= $value->pegawai_nama; ?>   (<?= $value->pegawai_nip; ?>)</option>
                <?php endforeach; ?>
              </select>
            </div>
      </div>
      <div class="modal-footer justify-content-between">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary tbltambah">Tambah Pegawai</button>
      </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <!-- <script>
    $(document).ready(function () {
        $('.status-checkbox').on('change', function () {
            var selectedItems = $('.status-checkbox:checked').map(function () {
                return $(this).val();
            }).get();
            alert(selectedItems);
            if (selectedItems.length > 0) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('pelaksana/updatetoggle'); ?>',
                    data: {
                        item_ids: selectedItems
                    },
                    success: function (response) {
                        // Handle success, for example, show a success message
                        alert('Status item berhasil diubah');
                    },
                    error: function (error) {
                        // Handle error, if any
                        console.error(error);
                    }
                });
            }
        });
        
    });
  </script> -->
  
<script>
    $(document).ready(function () {
        $('input[name="pelaksana_id"]').on('change', function () {
            var checkboxValue = $(this).val();
            var isChecked = $(this).is(':checked');
            
            if (isChecked) {
                console.log(checkboxValue);
                $.ajax({
                  type: "POST",
                  url: "<?= site_url('pelaksana/updatetoggle'); ?>",
                  data: {item_ids:checkboxValue},
                  // dataType: "dataType",
                  success: function (response) {
                    
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Pegawai ini sebagai Utama yang ditugaskan dalam Perjalanan Dinas',
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
                  url: "<?= site_url('pelaksana/updatetoggle'); ?>",
                  data: {item_ids:checkboxValue},
                  // dataType: "dataType",
                  success: function (response) {
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Pegawai ini sebagai Pengikut yang ditugaskan dalam Perjalanan Dinas',
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

    $(selector).change(function (e) { 
      e.preventDefault();
      
    });
</script>

<?= $this->endSection(); ?>