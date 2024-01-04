
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
        <div class="card card-primary card-outline">
          <div class="card-header">
              <h5 class="card-title"><?=$title;?></h5>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" hidden>Id Pelaksana</label>
              <div class="col">
                <input type="text" class="form-control" name="pelaksana_id" value="<?=$data[0]->pelaksana_id;?>" hidden>
              </div>
              <label class="col-sm-2 col-form-label" hidden>Id SPJ hotel</label>
              <div class="col">
                <input type="text" class="form-control" name="spjhotel_id" value="<?=$data[0]->spjhotel_id;?>" hidden>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Pelaksana</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="pegawai_nama" value="<?=$data[0]->pegawai_nama;?>" disabled>
              </div>
              <label class="col-sm-1 col-form-label text-right">No SPT</label>
              <div class="col-sm-3">
                <input type="text" class="form-control " name="pegawai_nama" value="<?=$data[0]->spt_nomor;?>" disabled>
              </div>
              <label class="col-sm-1 col-form-label text-right">Tanggal SPT</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_tgl" value="<?=date('d F Y', strtotime($data[0]->spt_tgl));?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label ">Tujuan</label>
              <div class="col-sm-3">
                <textarea type="text" class="form-control" name="spt_mulai" disabled><?=$data[0]->spt_tempat;?></textarea>
              </div>
              <label class="col-sm-1 col-form-label text-right">Tanggal Mulai</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_mulai" value="<?=date('d F Y', strtotime($data[0]->spt_mulai));?>" disabled>
              </div>
              <label class="col-sm-2 col-form-label text-right">Tanggal Selesai</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="spt_berakhir" value="<?=date('d F Y', strtotime($data[0]->spt_berakhir));?>" disabled>
              </div>
            </div>
            <!-- <div class="form-group row"> -->
              <a href="<?= site_url('spjhotel'); ?>" type="button" class="btn bg-gradient-warning float-sm-left" ><i class="fas fa-hand-point-left"> </i> Kembali</a>
              <button type="button" class="btn bg-gradient-primary float-sm-right"  data-idpelaksana="<?=$data[0]->pelaksana_id;?>" class="btn btn-primary"  data-toggle="modal" data-target="#hotelspj"><i class="fas fa-hand-point-right"> </i> Tambah SPJ Hotel</button>
            <!-- </div> -->
            </div>
          </div>

          <div class="card-footer">
            <table id="myTable1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="align-middle text-center">No</th>
                  <th class="align-middle text-center">Aksi</th>
                  <th class="align-middle text-center">Boarding<br>Bill</th>
                  <th class="align-middle text-center">Jenis</th>
                  <th class="align-middle text-center">Maskapai</th>
                  <th class="align-middle text-center">Nomor Tiket</th>
                  <th class="align-middle text-center">Kode Boking</th>
                  <th class="align-middle text-center">Tanggal</th>
                  <th class="align-middle text-center">Dari Bandara </th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    foreach ($data as $key => $value): ?>
                  <tr>
                    <td class="align-middle text-center"><?=$no++;?></td>
                    <td class="align-middle text-center">
                      <?php if ($value->spjhotel_verif == 0): ?>
                        <button type="button" class="btn bg-gradient-info btn-xs" data-idhotel="<?=$value->spjhotel_id;?>" data-scanbilllama="<?=$value->spjhotel_bill;?>" data-toggle="modal" data-target="#hotelbill"><i class="fas fa-upload"> </i> <br>Upload Bukti</button>
                        <button type="button" class="btn bg-gradient-warning btn-xs" data-idhotel="<?=$value->spjhotel_id;?>" data-idpelaksana ="<?=$data[0]->pelaksana_id;?>" id="tomboledit" data-toggle="modal" data-target="#hotelspj"><i class="fas fa-pen"> </i> <br>Edit</button>
                        <a href="<?=site_url('spjhotel/remove/' . $value->spjhotel_id)?>" type="button" class="btn bg-gradient-danger btn-xs tombol-hapus" data-idhotel=""><i class="fas fa-trash"> </i> <br>Hapus</a>
                          <button type="button" class="btn bg-gradient-warning btn-xs" data-toggle="modal" data-target="#modalverif" data-idpes="<?=$value->spjhotel_id;?>"><i class="fas fa-pen-square"> </i> <br>UnVerif</button>
                      <?php else: ?>
                        <button type="button" class="btn bg-gradient-success btn-xs" data-toggle="modal" data-target="#modalverif" data-idpes="<?=$value->spjhotel_id;?>"><i class="fas fa-check"> </i> <br>Disetujui</button>
                      <?php endif?>
                    </td>
                    <td class="align-middle text-center"><button type="button" class="btn bg-gradient-success btn-xs" data-toggle="modal" data-target="#modalscan" data-scanbill="<?=$value->spjhotel_bill?>"><i class="fas fa-file-pdf"></i><br>Bill</button></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_nama;?><br><?=$value->spjhotel_id;?></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_nokamar;?></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_typekamar;?></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_checkin;?></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_checkout == null ? "" : date('d F Y', strtotime($value->spjhotel_checkout));?></td>
                    <td class="align-middle text-center"><?=$value->spjhotel_hargatotal;?> </td>

                  </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal SPJ Hotel -->
  <div class="modal fade" id="hotelspj">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SPJ Hotel</h4>
        </div>
        <form action="<?=site_url('spjhotel/create');?>" method="post" id="formhotel">
          <?=csrf_field();?>
          <div class="modal-body">
            <div class="card-body">
              <!-- <p>One fine body&hellip;</p> membuat lambang titik titik-->
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" hidden>Id spjhotel</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_id" name="spjhotel_id" hidden>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label" hidden>Id Pelaksana</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_pelaksanaid" name="spjhotel_pelaksanaid" hidden>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis SPJ Hotel</label>
                  <div class="col">
                    <select class="form-control" style="width: 100%;" id="spjhotel_jenis" name="spjhotel_jenis">
                      <option value="">Pilih Jenis Tiket ...</option>
                      <option value="Berangkat">Berangkat</option>
                      <option value="Kembali">Kembali</option>
                    </select>
                    <div class="invalid-feedback errorspjhotel_jenis"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Maskapai</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_maskapai" name="spjhotel_maskapai">
                    <div class="invalid-feedback errorspjhotel_maskapai"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nomor Tiket</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_notiket" name="spjhotel_notiket">
                    <div class="invalid-feedback errorspjhotel_notiket"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode Boking</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_kdboking" name="spjhotel_kdboking">
                    <div class="invalid-feedback errorspjhotel_kdboking"></div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Hotel</label>
                  <div class="col">
                    <input type="date" class="form-control" id="spjhotel_tgl" name="spjhotel_tgl">
                    <div class="invalid-feedback errorspjhotel_tgl"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dari</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_dari" name="spjhotel_dari">
                    <div class="invalid-feedback errorspjhotel_dari"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Ke</label>
                  <div class="col">
                    <input type="text" class="form-control" id="spjhotel_ke" name="spjhotel_ke">
                    <div class="invalid-feedback errorspjhotel_ke"></div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Harga/Tiket/Orang</label>
                  <div class="col">
                    <input type="number" class="form-control" id="spjhotel_harga" name="spjhotel_harga">
                    <div class="invalid-feedback errorspjhotel_harga"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default batalhotel" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary simpanhotel">Save changes</button>
            </div>
          </div>
        </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- Modal SPJ Bill -->
  <div class="modal fade" id="hotelbill">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Tiket Hotel</h4>
        </div>
        <form action="<?=site_url('spjhotel/upload');?>" method="post" enctype="multipart/form-data" id="formupload">
          <?=csrf_field();?>
          <div class="modal-body">
            <div class="card-body">
              <!-- <p>One fine body&hellip;</p> membuat lambang titik titik-->
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" hidden>Id spjhotel</label>
                <div class="col">
                  <input type="text" class="form-control" id="id" name="spjhotel_id" hidden>
                  <input type="text" class="form-control" id="fototiketlama" name="fototiketlama" hidden>
                  <input type="text" class="form-control" id="scanbilllama" name="scanbilllama" hidden>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputFile" class="col-sm-4 col-form-label">Foto Tiket</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <input class="custom-file-input" type="file" name="spjhotel_fototiket" id="fototiket">
                    <label class="custom-file-label" for="custom-file-label" id="nama-foto">Pilih Foto</label>
                    <div class="invalid-feedback errorspjhotel_fototiket"></div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputFile" class="col-sm-4 col-form-label">Scan PDF Bill Hotel</label>
                <div class="col-sm-8">
                  <div class="input-group">
                    <input class="custom-file-input" type="file" name="spjhotel_bill" id="scanbill">
                      <label class="custom-file-label" for="custom-file-label" id="nama-scan">Pilih Scan Bill Hotel</label>
                      <div class="invalid-feedback errorspjhotel_bill"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default batalupload" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary simpanupload">Simpan</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- Modal Foto -->
    <div class="modal fade" id="modalfoto" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Foto Tiket</h4>
          </div>
          <div class="modal-body">
            <div class="col text-center">
              <p>Nama File : <span id="idmodalfoto"></span></p>
              <div id = "tampilfoto"></div>
            </div>
          </div>
          <div class="modal-footer justify-content-right">
            <button type="button" class="btn btn-danger tutupmodal" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->

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

  <!-- Modal Scan Bill -->
    <div class="modal fade" id="modalscan" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Scan Bill</h4>
          </div>
          <div class="modal-body">
            <div class="col text-center">
              <p>Nama File : <span id="idmodalbill"></span></p>
              <div id = "tampilbill"></div>
            </div>
          </div>
          <div class="modal-footer justify-content-right">
            <button type="button" class="btn btn-danger tutupmodal" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->

<?=$this->endSection()?>

<?=$this->section('script')?>
  <!-- Script Tampilan Tabel -->
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
  <!-- End Script Tampilan Tabel -->

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

<!-- Script Modal Tampilakan Foto Tiket -->
  <script>
    $(document).ready(function(){

       $('[data-target="#modalfoto"]').on('click', function(e) {
        e.preventDefault();
          var namafoto = $(this).data('fototiket');
          var imageUrl = "<?=base_url('image/hotel/tiket/')?>" + namafoto
          $('#idmodalfoto').text(namafoto);
          // console.log(namafoto);
          var linkhotel = $('<img>').attr({
            'src': imageUrl,
            'alt': 'Deskripsi Gambar',
            'width': '100%',
            'height': '200'
          });

        $('#tampilfoto').html(linkhotel);
       });

       $('.tutupmodal').on('click', function(){
        location.reload();
       });
    });
  </script>
<!-- End Script Modal Tampilakan Foto Tiket -->

  <!-- Script Modal Tampilkan Hasil Scan PDF -->
    <script>
      $(document).ready(function(){

        $('[data-target="#modalscan"]').on('click', function(e) {
          e.preventDefault();
            var namabill = $(this).data('scanbill');
            var imageUrl = "<?=base_url('image/hotel/bill/')?>" + namabill
            $('#idmodalbill').text(namabill);
            // console.log(namafoto);
            var linkbill = $('<iframe>').attr({
              'src': imageUrl,
              'title': 'Deskripsi bill',
              'width': '100%',
              'height': '200',
              'style' : 'border:none;'
            });

          $('#tampilbill').html(linkbill);
        });

        $('.tutupmodal').on('click', function(){
          location.reload();
        });
      });
    </script>
  <!-- End Script Modal Tampilkan Hasil Scan PDF -->

  <!-- Script Edit dan SImpan SPJ Tiket Hotel -->
    <script>
      $(document).ready(function(){
        $('[data-target="#hotelspj"]').click (function() {
          var idpelaksana = $(this).data('idpelaksana');
          $('#spjhotel_pelaksanaid').val(idpelaksana);

          var idhotel = $(this).data('idhotel');
          $('#spjhotel_id').val(idhotel);

          if(idhotel == null){
            $('#spjhotel_jenis').val('');
            $('#spjhotel_maskapai').val('');
            $('#spjhotel_notiket').val('');
            $('#spjhotel_kdboking').val('');
            $('#spjhotel_tgl').val('');
            $('#spjhotel_dari').val('');
            $('#spjhotel_ke').val('');
            $('#spjhotel_harga').val('');
            $('#hotelspj').show();

          } else {
            $.ajax({
              type: "get",
              url: "<?=site_url('spjhotel/edit/');?>" + idhotel,
              // data: "data",
              dataType: "json",
              success: function (response) {
                console.log(response);
                $('#spjhotel_jenis').val(response.spjhotel_jenis);
                $('#spjhotel_maskapai').val(response.spjhotel_maskapai);
                $('#spjhotel_notiket').val(response.spjhotel_notiket);
                $('#spjhotel_kdboking').val(response.spjhotel_kdboking);
                $('#spjhotel_tgl').val(response.spjhotel_tgl);
                $('#spjhotel_dari').val(response.spjhotel_dari);
                $('#spjhotel_ke').val(response.spjhotel_ke);
                $('#spjhotel_harga').val(response.spjhotel_harga);
                $('#hotelspj').show();
              }
            });
          }
        });

        $('#formhotel').submit(function(e){
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
                  $('.simpanhotel').attr('disabled', 'disabled');
                  $('.simpanhotel').html('<i class="fa fa-spin fa-spinner"></i>');
              },
              complete: function(){
                  $('.simpanhotel').removeAttr('disabled');
                  $('.simpanhotel').html('Simpan');
              },
            success: function (response) {
              console.log(response);
              if(response.error) {
                if(response.message.spjhotel_jenis){
                        $('#spjhotel_jenis').addClass('is-invalid');
                        $('.errorspjhotel_jenis').html(response.message.spjhotel_jenis);
                    } else {
                        $('#spjhotel_jenis').removeClass('is-invalid');
                        $('.errorspjhotel_jenis').html('');
                }
                if(response.message.spjhotel_maskapai){
                        $('#spjhotel_maskapai').addClass('is-invalid');
                        $('.errorspjhotel_maskapai').html(response.message.spjhotel_maskapai);
                    } else {
                        $('#spjhotel_maskapai').removeClass('is-invalid');
                        $('.errorspjhotel_maskapai').html('');
                }
                if(response.message.spjhotel_notiket){
                        $('#spjhotel_notiket').addClass('is-invalid');
                        $('.errorspjhotel_notiket').html(response.message.spjhotel_notiket);
                    } else {
                        $('#spjhotel_notiket').removeClass('is-invalid');
                        $('.errorspjhotel_notiket').html('');
                }
                if(response.message.spjhotel_kdboking){
                        $('#spjhotel_kdboking').addClass('is-invalid');
                        $('.errorspjhotel_kdboking').html(response.message.spjhotel_kdboking);
                    } else {
                        $('#spjhotel_kdboking').removeClass('is-invalid');
                        $('.errorspjhotel_kdboking').html('');
                }
                if(response.message.spjhotel_tgl){
                        $('#spjhotel_tgl').addClass('is-invalid');
                        $('.errorspjhotel_tgl').html(response.message.spjhotel_tgl);
                    } else {
                        $('#spjhotel_tgl').removeClass('is-invalid');
                        $('.errorspjhotel_tgl').html('');
                }
                if(response.message.spjhotel_dari){
                        $('#spjhotel_dari').addClass('is-invalid');
                        $('.errorspjhotel_dari').html(response.message.spjhotel_dari);
                    } else {
                        $('#spjhotel_dari').removeClass('is-invalid');
                        $('.errorspjhotel_dari').html('');
                }
                if(response.message.spjhotel_ke){
                        $('#spjhotel_ke').addClass('is-invalid');
                        $('.errorspjhotel_ke').html(response.message.spjhotel_ke);
                    } else {
                        $('#spjhotel_ke').removeClass('is-invalid');
                        $('.errorspjhotel_ke').html('');
                }
                if(response.message.spjhotel_harga){
                        $('#spjhotel_harga').addClass('is-invalid');
                        $('.errorspjhotel_harga').html(response.message.spjhotel_harga);
                    } else {
                        $('#spjhotel_harga').removeClass('is-invalid');
                        $('.errorspjhotel_harga').html('');
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
                  $('#hotelspj').hide('2000');
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
        $('.batalhotel').on('click', function () {
          location.reload();
        });
      });


    </script>
  <!-- End Script Edit dan SImpan SPJ Tiket Hotel -->

  <!-- Script Upload Tiket dan Bill -->
    <script>
      $(document).ready(function(){
        $('[data-target="#hotelbill"]').click (function() {
          var idhotel = $(this).data('idhotel')
          var fototiketlama = $(this).data('fototiketlama')
          var scanbilllama = $(this).data('scanbilllama')
          $('#id').val(idhotel)
          $('#fototiketlama').val(fototiketlama)
          $('#scanbilllama').val(scanbilllama)

        });
        $('#fototiket').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            console.log('Nama file:', fileName);
            $('#nama-foto').text(fileName);
        });
        $('#scanbill').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            console.log('Nama file:', fileName);
            $('#nama-scan').text(fileName);
        });
        $('#formupload').submit(function(e){
          e.preventDefault();
          var dataupload = new FormData(this);

          $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: dataupload,
            processData: false,
            contentType: false,
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
                if(response.errors) {
                  if(response.messages.idkosong){
                    Swal.fire({
                      position: "center",
                      icon: "success",
                      title: response.messages.idkosong,
                      showConfirmButton: true,
                      // timer: 2000
                    }).then(function(){
                      $('#hotelbill').hide('2000');
                      location.reload();

                    });
                  } else {
                    if(response.messages.spjhotel_fototiket){
                            $('#fototiket').addClass('is-invalid');
                            $('.errorspjhotel_fototiket').html(response.messages.spjhotel_fototiket);
                        } else {
                            $('#fototiket').removeClass('is-invalid');
                            $('.errorspjhotel_fototiket').html('');
                    }
                    if(response.messages.spjhotel_bill){
                            $('#scanbill').addClass('is-invalid');
                            $('.errorspjhotel_bill').html(response.messages.spjhotel_bill);
                        } else {
                            $('#scanbill').removeClass('is-invalid');
                            $('.errorspjhotel_bill').html('');
                    }

                  }
                } else {
                  console.log(response);
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: response.messages,
                    showConfirmButton: false,
                    timer: 2000
                  }).then(function(){
                    $('#hotelbill').hide('2000');
                    location.reload();

                  });
                };
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika terjadi
                console.error();
            }
          });
        });
        $('.batalupload').on('click', function () {
          location.reload();
        });
      });
    </script>
  <!-- End Script Upload Tiket dan Bill -->

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