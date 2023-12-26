
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
              <h5 class="card-title"><?= $title; ?></h5>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" hidden>Id Pelaksana</label>
              <div class="col">
                <input type="text" class="form-control" name="pelaksana_id" value="<?= $data[0]->pelaksana_id; ?>" hidden>
              </div>
              <label class="col-sm-2 col-form-label" hidden>Id SPJ pesawat</label>
              <div class="col">
                <input type="text" class="form-control" name="spjpesawat_id" value="<?= $data[0]->spjpesawat_id; ?>" hidden>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Pelaksana</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="pegawai_nama" value="<?= $data[0]->pegawai_nama; ?>" disabled>
              </div>
              <label class="col-sm-1 col-form-label text-right">No SPT</label>
              <div class="col-sm-3">
                <input type="text" class="form-control " name="pegawai_nama" value="<?= $data[0]->spt_nomor; ?>" disabled>
              </div>
              <label class="col-sm-1 col-form-label text-right">Tanggal SPT</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_tgl" value="<?= date('d F Y',strtotime($data[0]->spt_tgl)); ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label ">Tujuan</label>
              <div class="col-sm-3">
                <textarea type="text" class="form-control" name="spt_mulai" disabled><?= $data[0]->spt_tempat; ?></textarea>
              </div>
              <label class="col-sm-1 col-form-label text-right">Tanggal Mulai</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_mulai" value="<?= date('d F Y',strtotime($data[0]->spt_mulai)); ?>" disabled>
              </div>
              <label class="col-sm-2 col-form-label text-right">Tanggal Selesai</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_berakhir" value="<?= date('d F Y',strtotime($data[0]->spt_berakhir)); ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
            </div>
              <button type="button" class="btn bg-gradient-primary"  name="spj" id="spj" data-idpelaksana="<?= $data[0]->pelaksana_id; ?>" class="btn btn-primary"  data-toggle="modal" data-target="#pesawatspj"><i class="fas fa-hand-point-right"> </i> Tambah SPJ Pesawat</button>
            </div>
          </div>
        
          <div class="card-footer">
            <table id="myTable1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="align-middle text-center">No</th>
                  <th class="align-middle text-center">Jenis</th>
                  <th class="align-middle text-center">Maskapai</th>
                  <th class="align-middle text-center">Nomor Tiket</th>
                  <th class="align-middle text-center">Kode Boking</th>
                  <th class="align-middle text-center">Tanggal Berangkat</th>
                  <th class="align-middle text-center">Dari Bandara </th>
                  <th class="align-middle text-center">Ke Bandara </th>
                  <th class="align-middle text-center">Harga</th>
                  <th class="align-middle text-center">Foto Boarding</th>
                  <th class="align-middle text-center">Bukti Pembelian</th>
                  <th class="align-middle text-center">Status</th>
                  <th class="align-middle text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($data as $key => $value) : ?>
                  <tr>
                    <td class="align-middle text-center"><?= $no++; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_jenis; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_maskapai; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_notiket; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_kdboking; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_tgl; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_dari; ?> </td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_ke; ?> </td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_harga; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_fototiket; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_bill; ?></td>
                    <td class="align-middle text-center"><?= $value->spjpesawat_verif; ?></td>
                    <td class="align-middle text-center"></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal SPJ Pesawat -->
  <div class="modal fade" id="pesawatspj">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SPJ Pesawat</h4>
        </div>
        <form action="<?= site_url('spjpesawat/create'); ?>" method="post">
          <?= csrf_field(); ?>
          <div class="modal-body">
            <div class="card-body">
              <!-- <p>One fine body&hellip;</p> membuat lambang titik titik-->
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Id spjpesawat</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjpesawat_id" name="spjpesawat_id">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Id Pelaksana</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjpesawat_pelaksanaid" name="spjpesawat_pelaksanaid">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis SPJ Pesawat</label>
                  <div class="col">
                    <select class="form-control" style="width: 100%;" name="spjpesawat_jenis">
                      <option value="">Pilih Jenis Tiket ...</option>
                      <option value="Berangkat">Berangkat</option>
                      <option value="Kembali">Kembali</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Maskapai</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_maskapai">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nomor Tiket</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_notiket">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode Boking</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_kdboking">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Pesawat</label>
                  <div class="col">
                    <input type="date" class="form-control" name="spjpesawat_tgl">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dari</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_dari">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Ke</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_ke">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Harga/Tiket/Orang</label>
                  <div class="col">
                    <input type="number" class="form-control" name="spjpesawat_harga">
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Foto Tiket</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_fototiket">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dokumen Bill</label>
                  <div class="col">
                    <input type="text" class="form-control" name="spjpesawat_bill">
                  </div>
                </div> -->
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
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
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
      })
    });
  </script>
  <!-- <script>
    $(document).ready(function(){
      
       $('[data-target="#modalfoto"]').on('click', function(e) {
        e.preventDefault();
          var namafoto = $(this).data('filehotel');
          var imageUrl = "<?= base_url('image/hotel/') ?>" + namafoto
          $('#idmodalfoto').text(namafoto);
          // console.log(namafoto);
          var linkhotel = $('<img>').attr({
            'src': imageUrl,
            'alt': 'Deskripsi Gambar',
            'width': '100%',
            'height': '400'
          });

        $('#tampilfoto').html(linkhotel);
       });

       $('.tutupmodal').on('click', function(){
        location.reload();
       });
    });
  </script> -->
  <!-- <script>
    $(document).ready(function(){
      
       $('[data-target="#modalbill"]').on('click', function(e) {
        e.preventDefault();
          var namabill = $(this).data('filebill');
          var imageUrl = "<?= base_url('image/hotelbill/') ?>" + namabill
          $('#idmodalbill').text(namabill);
          // console.log(namafoto);
          var linkbill = $('<iframe>').attr({
            'src': imageUrl,
            'title': 'Deskripsi bill',
            'width': '100%',
            'height': '600',
            'style' : 'border:none;'
          });

        $('#tampilbill').html(linkbill);
       });

       $('.tutupmodal').on('click', function(){
        location.reload();
       });
    });
  </script> -->
  <script>
    $(document).ready(function(){
      $('[data-target="#pesawatspj"]').click(function() {
        var pesawatspjid = $(this).data('id');
        var idpelaksana = $(this).data('idpelaksana');

        $('#spjpesawat_id').val(pesawatspjid);
        $('#spjpesawat_pelaksanaid').val(idpelaksana);
      });
    });
  </script>
<?= $this->endSection() ?>