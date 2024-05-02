<?php 
use App\Models\BpkModel;
use App\Models\RampungModel;

  $uhs = new BpkModel();
  $modelrampung = new RampungModel();
  
?>
<?=$this->extend('layout/default');?>

<?=$this->section('stylesheet');?>
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Bootstrap Switch Button -->
  <link rel="stylesheet" href="plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch-button.min.css">

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

  <!-- Bootstrap Switch Button -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch-button.min.js"></script>


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
        <div class="card card-primary">
          <div class="card-header">
            <h5 class="card-title"><?=$title;?></h5>
          </div>
          <div class="card"></div>
            <!-- <div class="card-body row justify-content-center"> -->
          <div class="card-body table-responsive p-0 " style="height: 900px;">
            <div class="col-12">
              <table id="myTable1" class="table table-bordered table-head-fixed table-sm">
                <thead>
                  <tr>
                    <th class="align-middle text-center" rowspan="3">NO</th>
                    <th class="align-middle text-center" rowspan="3">TAHUN</th>
                    <th class="align-middle text-center" rowspan="3">JENIS PERJALANAN</th>
                    <th class="align-middle text-center" rowspan="3">NAMA</th>
                    <th class="align-middle text-center" rowspan="3">JABATAN/ GOL/ TINGKAT BIAYA</th>
                    <th class="align-middle text-center" rowspan="2" colspan="6">SURAT PERINTAH TUGAS</th>
                    <th class="align-middle text-center" rowspan="2" colspan="6">SURAT PERJALANAN DINAS</th>
                    <th class="align-middle text-center" rowspan="2" colspan="4">BIAYA PERJALANAN DINAS</th>
                    <th class="align-middle text-center" colspan="10">PESAWAT</th>
                    <th class="align-middle text-center" colspan="8" rowspan="2">HOTEL</th>
                    <th class="align-middle text-center" colspan="6">TAKSI/TRANSPORT LOKAL</th>
                    <th class="align-middle text-center" rowspan="3">TOTAL</th>
                  </tr>
                  <tr>
                    <th class="align-middle text-center" colspan="5">BERANGKAT</th>
                    <th class="align-middle text-center" colspan="5">KEMBALI</th>
                    <th class="align-middle text-center" colspan="3">BERANGKAT</th>
                    <th class="align-middle text-center" colspan="3">KEMBALI</th>
                  </tr>
                  <tr>
                    <th class="align-middle text-center">NO. SPT</th>
                    <th class="align-middle text-center">TANGGAL</th>
                    <th class="align-middle text-center">TEMPAT TUJUAN</th>
                    <th class="align-middle text-center">JUMLAH HARI</th>
                    <th class="align-middle text-center">TGL. BERANGKAT</th>
                    <th class="align-middle text-center">TGL. KEMBALI</th>
                    <th class="align-middle text-center">NO. SPD</th>
                    <th class="align-middle text-center">TANGGAL</th>
                    <th class="align-middle text-center">TEMPAT TUJUAN</th>
                    <th class="align-middle text-center">JUMLAH HARI</th>
                    <th class="align-middle text-center">TGL. BERANGKAT</th>
                    <th class="align-middle text-center">TGL. KEMBALI</th>
                    <th class="align-middle text-center">UANG HARIAN</th>
                    <th class="align-middle text-center">PENGGANTI TRANSPORT</th>
                    <th class="align-middle text-center">REPRESENTATIF</th>
                    <th class="align-middle text-center">SEWA MOBIL</th>
                    <th class="align-middle text-center">MASKAPAI (Berangkat)</th>
                    <th class="align-middle text-center">NO. TIKET</th>
                    <th class="align-middle text-center">KODE BOKING</th>
                    <th class="align-middle text-center">TANGGAL PENERBANGAN</th>
                    <th class="align-middle text-center">HARGA</th>
                    <th class="align-middle text-center">MASKAPAI (Kembali)</th>
                    <th class="align-middle text-center">NO. TIKET</th>
                    <th class="align-middle text-center">KODE BOKING</th>
                    <th class="align-middle text-center">TANGGAL PENERBANGAN</th>
                    <th class="align-middle text-center">HARGA</th>
                    <th class="align-middle text-center">NAMA DAN LOKASI HOTEL</th>
                    <th class="align-middle text-center">TIPE KAMAR</th>
                    <th class="align-middle text-center">NOMOR KAMAR</th>
                    <th class="align-middle text-center">TGL. CHECKIN</th>
                    <th class="align-middle text-center">TGL. CHECKOUT</th>
                    <th class="align-middle text-center">LAMA</th>
                    <th class="align-middle text-center">HARGA PER MALAM</th>
                    <th class="align-middle text-center">TOTAL HARGA</th>
                    <th class="align-middle text-center">TUJUAN</th>
                    <th class="align-middle text-center">TGL. BERANGKAT</th>
                    <th class="align-middle text-center">HARGA</th>
                    <th class="align-middle text-center">TUJUAN</th>
                    <th class="align-middle text-center">TGL. BERANGKAT</th>
                    <th class="align-middle text-center">HARGA</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;foreach ($data as $key => $value): 
                    $idpelaksana = $value->pelaksana_id;
                    $idspt = $value->spt_id;
                    ?>
                  <tr>
                      <td class="align-middle text-center"><?=$no++;?></td>
                      <td class="align-middle text-center"><?= $value->spt_tahun; ?></td>
                      <td class="align-middle text-center"><?= $value->jenisperjadin_nama; ?></td>
                      <td class="align-middle text-left"><?= $value->pegawai_nama; ?><br>NIP. <?= $value->pegawai_nip; ?></td>
                      <td class="align-middle text-center">
                        <?= $value->pegawai_jabatan; ?><br><?= $value->pangkat_nama; ?> (<?= $value->pangkat_gol; ?>)
                        <br>Tingkat <?= $value->tingkat_nama; ?> 
                      </td>
                      <td class="align-middle text-center"><?= $value->spt_nomor; ?></td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_tgl)); ?></td>
                      <td class="align-middle text-center"><?= $value->lokasiperjadin_nama; ?></td>
                      <td class="align-middle text-center"><?= $value->spt_lama; ?> hari</td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_mulai)); ?></td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_berakhir)); ?></td>
                      <td class="align-middle text-center"><?= $value->sppd_nomor; ?></td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_tgl)); ?></td>
                      <td class="align-middle text-center"><?= $value->lokasiperjadin_nama; ?></td>
                      <td class="align-middle text-center"><?= $value->spt_lama; ?> hari</td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_mulai)); ?></td>
                      <td class="align-middle text-center"><?= date('d-m-Y',strtotime($value->spt_berakhir)); ?></td>
                      <?php 
                      $uharian = $modelrampung->rampungharian($idpelaksana);
                      foreach ($uharian as $key => $uh) :?>
                      <td class="align-middle text-right"><?= number_format($uh->uangharian_jumlah,2,',','.') ?></td>
                      <td class="align-middle text-right"><?= number_format($uh->uangharian_jumlahbiayatransport,2,',','.') ?></td>
                      <td class="align-middle text-right"><?= number_format($uh->uangharian_jumlahrepresentasi,2,',','.') ?></td>
                      <td class="align-middle text-right"><?= number_format($uh->uangharian_jumlahsewamobil,2,',','.') ?></td>
                      <?php endforeach ?>
                      <?php 
                      $bpkpesawat = $modelrampung->rampungpesawatberangkat($idpelaksana) ?>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat) :?>
                        <?= $pesawat->spjpesawat_maskapai ?><br>
                        <?php endforeach ?>
                      </td>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=$pesawat->spjpesawat_notiket?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=$pesawat->spjpesawat_kdboking?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=date('d-m-Y',strtotime($pesawat->spjpesawat_tgl))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=number_format($pesawat->spjpesawat_harga,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <?php 
                      $bpkpesawat = $modelrampung->rampungpesawatkembali($idpelaksana) ?>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat) :?>
                        <?= $pesawat->spjpesawat_maskapai ?><br>
                        <?php endforeach ?>
                      </td>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=$pesawat->spjpesawat_notiket?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=$pesawat->spjpesawat_kdboking?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=date('d-m-Y',strtotime($pesawat->spjpesawat_tgl))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpkpesawat as $key => $pesawat): ?>
                        <?=number_format($pesawat->spjpesawat_harga,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <?php 
                      $bpkhotel = $modelrampung->rampunghotel($idpelaksana) ?>
                      <td class="align-middle text-left">
                        <?php foreach ($bpkhotel as $key => $hotel) :?>
                        <?= $hotel->spjhotel_nama ?> - <?= $hotel->spjhotel_lokasi ?><br>
                        <?php endforeach ?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=$hotel->spjhotel_typekamar?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=$hotel->spjhotel_nokamar?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=date('d-m-Y',strtotime($hotel->spjhotel_checkin))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=date('d-m-Y',strtotime($hotel->spjhotel_checkout))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=$hotel->spjhotel_mlm?> mlm<br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=number_format($hotel->spjhotel_hargapermalam,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpkhotel as $key => $hotel): ?>
                        <?=number_format($hotel->spjhotel_hargatotal,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <?php 
                      $bpktaksi = $modelrampung->rampungtaksiberangkat($idpelaksana) ?>
                      <td class="align-middle text-left">
                        <?php foreach ($bpktaksi as $key => $taksi) :?>
                        <?= $taksi->spjtaksi_dari ?> ke <?= $taksi->spjtaksi_ke ?><br>
                        <?php endforeach ?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpktaksi as $key => $taksi): ?>
                        <?=date('d-m-Y',strtotime($taksi->spjtaksi_tgl))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpktaksi as $key => $taksi): ?>
                        <?=number_format($taksi->spjtaksi_harga,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <?php 
                      $bpktaksi = $modelrampung->rampungtaksikembali($idpelaksana) ?>
                      <td class="align-middle text-left">
                        <?php foreach ($bpktaksi as $key => $taksi) :?>
                        <?= $taksi->spjtaksi_dari ?> ke <?= $taksi->spjtaksi_ke ?><br>
                        <?php endforeach ?>
                      </td>
                      <td class="align-middle text-center">
                        <?php foreach ($bpktaksi as $key => $taksi): ?>
                        <?=date('d-m-Y',strtotime($taksi->spjtaksi_tgl))?><br>
                        <?php endforeach?>
                      </td>
                      <td class="align-middle text-right">
                        <?php foreach ($bpktaksi as $key => $taksi): ?>
                        <?=number_format($taksi->spjtaksi_harga,2,',','.')?><br>
                        <?php endforeach?>
                      </td>
                      <?php 
                      $subtotal = $modelrampung->rampungperpelaksana($idspt, $idpelaksana) ?>
                      <td class="align-middle text-right">
                        <?php foreach ($subtotal as $key => $sub) :?>
                        <?= number_format($sub->subtotal,2,',','.') ?>
                        <?php endforeach ?>
                      </td>

                    </tr>
                    <?php endforeach?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<?=$this->endSection()?>

<?=$this->section('script')?>
  <script>
    $(function () {
      $("#myTable1").DataTable({
      "responsive": false, "lengthChange": false, "autoWidth": false, 
      "buttons": ["copy", "csv", "excel"]
    }).buttons().container().appendTo('#myTable1_wrapper .col-md-6:eq(0)');
      // $("#myTable1").DataTable({
      //   "paging": true,
      //   "lengthChange": false,
      //   "searching": true,
      //   "ordering": false,
      //   "info": false,
      //   "autoWidth": false,
      //   "responsive": true,
        // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
      // })
    });
  </script>
  <!-- Script Edit dan SImpan SPJ Tiket Pesawat -->
    <script>
      $(document).ready(function(){
        $('[data-target="#form"]').click (function() {
          var roleid = $(this).data('roleid');
          $('#role_id').val(roleid);

          if(roleid == null){
            $('#role_nama').val('');

          } else {
            $.ajax({
              type: "get",
              url: "<?=site_url('role/edit/');?>" + roleid,
              // data: "data",
              dataType: "json",
              success: function (response) {
                console.log(response);
                $('#role_nama').val(response.role_nama);
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
<?=$this->endSection()?>