
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
        <div class="card card-primary card-tabs">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              <?= $title; ?>
            </h3>
          </div>
          <div class="card-body">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th style="width: 20px"></th>
                  <th>Uraian</th>
                  <th style="width: 70%" colspan="3">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Nomor SPT dan SPD</td>
                  <td colspan="3"><?= $data["data"][0]->spt_nomor; ?> &nbsp;&nbsp;&nbsp; dan &nbsp;&nbsp;&nbsp; <?= $data["data"][0]->sppd_nomor; ?></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Tanggal SPT dan SPD</td>
                  <td colspan="3"><?=date('d F Y', strtotime($data["data"][0]->spt_tgl));?></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Tanggal Berangkat dan Kembali</td>
                  <td colspan="3"><?=date('d F Y', strtotime($data["data"][0]->spt_mulai));?> &nbsp;&nbsp;&nbsp; s.d &nbsp;&nbsp;&nbsp; <?=date('d F Y', strtotime($data["data"][0]->spt_berakhir));?></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Lokasi Perjalanan Dinas</td>
                  <td colspan="3">
                    <?= $data["data"][0]->lokasiperjadin_nama; ?>
                  </td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>Tujuan Perjaanan Dinas</td>
                  <td colspan="3"><?= $data["data"][0]->spt_uraian; ?> ke <?= $data["data"][0]->spt_tempat; ?></td>
                </tr>
                <tr>
                  <td rowspan = <?= $data['jumlah'] + 1; ?>>6.</td>
                  <td rowspan = <?= $data['jumlah'] + 1; ?>>Pegawai yang melaksanakan</td>
                </tr>
                <?php $no = 1; 
                  foreach ($data["data"] as $key => $value) : ?>
                <tr>
                  <td>Nama : <?= $value->pegawai_nama; ?>.,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP. <?= $value->pegawai_nip; ?>
                    <br>Jabatan : <?= $value->pegawai_jabatan; ?>
                  </td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Hotel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Pesawat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Taksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Laporan Perjadin</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                     <table class="table table-sm">
                        <thead>
                          <tr>
                            <th style="width: 20px">#</th>
                            <th>Uraian</th>
                            <th style="width: 80%">Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1; foreach ($hotel['data'] as $key => $value) : ?>
                            <input type="text" name="spjhotel_id" value="<?= $value->spjhotel_id; ?>" hidden>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Nama Hotel</td>
                              <td><?= $value->spjhotel_nama; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Lokasi</td>
                              <td><?= $value->spjhotel_lokasi; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Nomor Kamar</td>
                              <td><?= $value->spjhotel_nokamar; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Tipe Kamar</td>
                              <td><?= $value->spjhotel_typekamar; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Cin & Cout</td>
                              <td><?= date('d F Y', strtotime($value->spjhotel_checkin)); ?> &nbsp;&nbsp;&nbsp;&nbsp; s.d &nbsp;&nbsp;&nbsp;&nbsp; <?= date('d F Y', strtotime($value->spjhotel_checkout)); ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Harga Per Malam</td>
                              <td><?= $value->spjhotel_hargapermalam; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Harga Total</td>
                              <td><?= $value->spjhotel_hargatotal; ?></td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Validasi</td>
                              <td>
                                <?php if($value->spjhotel_verif == 0) : ?>
                                  <button type="button" class="btn bg-gradient-warning " data-toggle="modal" data-target="#modalverif" data-idpes="<?=$value->spjhotel_id;?>"><i class="fas fa-times"> </i> Bukti Hotel Belum di Verifikasi </button>
                                <?php else : ?>
                                  <button type="button" class="btn bg-gradient-success " data-toggle="modal" data-target="#modalverif" data-idpes="<?=$value->spjhotel_id;?>"><i class="fas fa-check"> </i> Bukti Hotel sudah di Verifikasi </button>
                                <?php endif ?>
                              </td>
                            </tr>
                            <tr>
                              <td><?= $no++; ?>.</td>
                              <td>Bill</td>
                              <td>
                                <iframe src="<?= base_url('image/hotel/bill/' . $value->spjhotel_bill)?>" width="100%" height="600" style="border:1px solid #666;"></iframe>
                              </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <a href="<?= site_url('verifikasi/form/'.$value->spt_id); ?>" type="button" class="btn bg-gradient-warning float-sm-left" ><i class="fas fa-hand-point-left"> </i>   Kembali</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal verif -->
    <div class="modal fade" id="modalverif" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Verifikasi</h4>
          </div>
          <form action="<?= site_url('spjhotel/verif'); ?>" method="post" id="formverif">
            <?php csrf_field() ?>
              <div class="modal-body">
                <div class="text-center">
                  <div class="form-group">
                    <div class="row">
                      <input type="text" class="form-control" id="spjpes_id" name="spjhotel_id" hidden>
                      <div class="col-6 form-check">
                        <input class="form-check-input" type="radio" name="spjhotel_verif" value="1" id="cek1">
                        <label class="form-check-label">Disetujui</label>
                      </div>
                      <div class="col-6 form-check">
                        <input class="form-check-input" type="radio" name="spjhotel_verif" value="0" id="cek0">
                        <label class="form-check-label">Ditolak</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-right">
                <button type="submit" class="btn btn-danger saveverif">Kirim</button>
              </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
<?=$this->endSection()?>

<?=$this->section('script')?>
  <!-- Script Validasi Tiket Hotel -->
    <script>
      $(document).ready(function(){
        $('[data-target="#modalverif"]').click (function() {
          var idpes = $(this).data('idpes');
          $('#spjpes_id').val(idpes);
        });

        $('#formverif').submit(function(e){
          e.preventDefault();
          var dataverif = new FormData(this);
          
          $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: dataverif,
            processData: false,
            contentType: false,
            beforeSend:function(){
                  $('.saveverif').attr('disabled', 'disabled');
                  $('.saveverif').html('<i class="fa fa-spin fa-spinner"></i>');
              },
              complete: function(){
                  $('.savenverif').removeAttr('disabled');
                  $('.saveverif').html('Simpan');
              },
              
            success: function (response) {
              console.log(response);
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: response.messages,
                    showConfirmButton: false,
                    timer: 2000
                  }).then(function(){
                    $('#modalverif').hide('2000');
                    location.reload();

                  });
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
          });
        });
      });
        

    </script>
  <!-- End Script Validasi Tiket Hotel -->
<?=$this->endSection()?>