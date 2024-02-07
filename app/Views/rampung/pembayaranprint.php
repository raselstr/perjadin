<?php

use App\Models\PelaksanaModel;
use App\Models\RampungModel;
$model = new RampungModel();
$angkaterbilang = new PelaksanaModel(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <base href="<?= base_url('templates'); ?>/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body>
    <div class="content">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="fas fa-globe"></i> BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN.
                      <small class="float-right"></small><br>
                    </h4>
                    <br>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-12 invoice-col align-middle text-center ">
                    <h4><strong> RINCIAN BIAYA PERJALANAN DINAS</strong></h4><br>
                  </div>
                </div>
                <div class="row"></div>
                <?php foreach ($data as $key => $value): ?>
                        <div class="row invoice-info">
                          <div class="col-sm-8 invoice-col">
                            <table>
                              <tr>
                                <th width='60%'><b>Lampiran SPD Nomor</th>
                                <td width='5%'>:</td>
                                <td><?=$value->sppd_nomor;?></b><br></td>
                              </tr>
                              <tr>
                                <th><b>Tanggal SPD</b></th>
                                <td>:</td>
                                <td><?=date('d F Y', strtotime($value->spt_nomor));?></td>
                              </tr>
                            </table>  
                          </div>
                          <!-- /.col -->
                        </div>
                        <?php endforeach?>
                        <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th style="width:3%">No</th>
                          <th colspan="5" class="align-middle text-center">Rincian</th>
                          <th class="align-middle text-center">Jumlah</th>
                          <th class="align-middle text-center">Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                          foreach ($all as $key => $value): ?>
                                                      <?php
                          $pelaksana_id = $value->pelaksana_id;
                          $sptid = $value->spt_id;
                          ?>
                        <tr>
                          <td rowspan="9"><?=$no++;?></td>
                          <td style="width:23%" rowspan="9"><i><?=$value->pegawai_nama;?><br>NIP. <?=$value->pegawai_nip;?></i></td>
                          <td colspan="2" style="width:20%">Uang Harian</td>
                          <td style="width:20%" class="align-middle text-right" colspan="2">
                            <?php $qrharian = $model->rampungharian($pelaksana_id);?>
                            <?php $totharian = 0;
                              foreach ($qrharian as $key => $harians): ?>
                              <i><?=$value->spt_lama?> hari x Rp. <?=$harian = number_format($harians->uangharian_perhari, 0, ',', '.');
                              $totharian = $harians->uangharian_jumlah?></i><br>
                              <?php endforeach?>
                            </td>
                            <td class="align-middle text-right">
                              <?=number_format($totharian, 2, ',', '.');?>
                            </td>
                          <td class="align-top text-right" rowspan="9"><strong></strong></td>
                        </tr>
                        <?php $qrpesawat = $model->rampungpesawat($pelaksana_id);?>
                        <tr>
                          <td colspan="5">Biaya Trasportasi</td>
                        </tr>
                        <tr>
                          <td style="width:2%"></td>
                          <td>Pesawat</td>
                          <td style="width:20%">
                            <?php foreach ($qrpesawat as $key => $value): ?>
                              <i><?=$value->spjpesawat_jenis?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right" style="width:15%">
                            <?php foreach ($qrpesawat as $key => $value): ?>
                              <i><?=number_format($value->spjpesawat_harga, 0, ',', '.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-top text-right" style="width:15%">
                            <?php $total2 = 0;
                              foreach ($qrpesawat as $key => $value) {
                                  $subtotal = intval($value->spjpesawat_harga);
                                  $total2 += $subtotal;
                              }?>
                            <?=number_format($total2, 2, ',', '.');?>
                          </td>
                        </tr>
                        <?php $qrtaksi = $model->rampungtaksi($pelaksana_id);?>
                        <tr>
                          <td></td>
                          <td>Taksi</td>
                          <td>
                            <?php foreach ($qrtaksi as $key => $value): ?>
                              <i><?=$value->spjtaksi_jenis?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrtaksi as $key => $value): ?>
                              <i><?=number_format($value->spjtaksi_harga, 0, ',', '.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php $total3 = 0;
                              foreach ($qrtaksi as $key => $value) {
                                  $subtotal = intval($value->spjtaksi_harga);
                                  $total3 += $subtotal;
                              }?>
                            <?=number_format($total3, 2, ',', '.');?>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td >Pengganti Biaya Transport</td>
                          <td colspan="2" class="align-middle text-right">
                            <?php foreach ($qrharian as $key => $harian): ?>
                              <i><?=$harian->uangharian_lama?> hari x Rp. <?=number_format($harian->uangharian_biayatransport, 0, ',', '.')?></i><br>
                            </td>
                            <td class="align-middle text-right">
                              <?=number_format($harian->uangharian_jumlahbiayatransport, 2, ',', '.');?>
                            </td>
                            <?php endforeach?>
                        </tr>
                        <?php $qrhotel = $model->rampunghotel($pelaksana_id);?>
                        <tr>
                          <td colspan="4">Biaya Penginapan</td>
                          <td class="align-middle text-right">
                            <?php $total4 = 0;
                              foreach ($qrhotel as $key => $value) {
                                  $subtotal = intval($value->spjhotel_mlm) * intval($value->spjhotel_hargapermalam);
                                  $total4 += $subtotal;
                              }?>
                            <?=number_format($total4, 2, ',', '.');?>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                          <?php foreach ($qrhotel as $key => $value): ?>
                            <i><?=$value->spjhotel_nama?></i><br>
                          <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrhotel as $key => $value): ?>
                            <i><?=$value->spjhotel_mlm?> <i>mlm</i> x Rp.   <?=number_format($value->spjhotel_hargapermalam, 0, ',', '.')?> </i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrhotel as $key => $value): ?>
                              <i>= &nbsp;&nbsp;&nbsp;<?=number_format(intval($value->spjhotel_mlm) * intval($value->spjhotel_hargapermalam), 0, ',', '.')?></i><br>
                            <?php endforeach?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Uang Representasi</td>
                          <td style="width:20%" class="align-middle text-right" colspan="2">
                            <?php $jlhrepresentasi = 0;
                              $jlhsewamobil = 0;
                              $lama = 0;
                              $representasi = 0;
                              $sewa = 0;

                              foreach ($qrharian as $key => $harian):
                                  $jlhrepresentasi = $harian->uangharian_jumlahrepresentasi;
                                  $jlhsewamobil = $harian->uangharian_jumlahsewamobil;
                                  $lama = $harian->uangharian_lama;
                                  $representasi = $harian->uangharian_representasi;
                                  $sewa = $harian->uangharian_sewamobil;
                                  ?>
	                              <i><?=$lama?> hari x Rp. <?=number_format($representasi, 0, ',', '.');?></i><br>
	                              <?php endforeach?>
                            </td>
                            <td class="align-middle text-right">
                              <?=number_format($jlhrepresentasi, 2, ',', '.');?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Sewa Kendaraan / 8 jam</td>
                          <td style="width:20%" class="align-middle text-right" colspan="2">
                              <i><?=$lama?> kali x Rp. <?=number_format($sewa, 0, ',', '.');?></i><br>
                            </td>
                            <td class="align-middle text-right">
                            <?=number_format($jlhsewamobil, 2, ',', '.');?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="7" class="align-middle text-right"><strong> Sub Total</strong></td>
                          <td class="align-middle text-right">
                            <strong>
                              <?php $subtotal = $model->rampungperpelaksana($sptid, $pelaksana_id);?>
                              <?php foreach ($subtotal as $key => $sub): ?>
                                <?=number_format($sub->subtotal, 2, ',', '.');?>
                              <?php endforeach?>
                            </strong>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="8"></td>
                        </tr>
                        <?php endforeach?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-6"></div>
                  <!-- /.col -->
                  <div class="col-6">
                    
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:30%">Total Keseluruhan </th>
                          <td class="align-middle text-right">
                            <strong>
                              <?php $sumgrand = 0;
                                foreach ($all as $key => $value):
                                    $pelaksana_id = $value->pelaksana_id;
                                    $sptid = $value->spt_id;
                                    $grand = $model->rampungperpelaksana($sptid, $pelaksana_id);
                                    foreach ($grand as $key => $grandtotal):
                                        $sumtotal = intval($grandtotal->subtotal);
                                        $sumgrand += $sumtotal;
                                    endforeach;
                                endforeach;
                                echo number_format($sumgrand, 2, ',', '.');
                                ?>
                            </strong>
                          </td>
                        </tr>
                        <tr>
                          <th>Terbilang </th>
                          <td>
                            <?php 

                            $terbilangangka = $angkaterbilang->angkaKeHuruf($sumgrand);
                            // dd($terbilangangka);
                              echo '<strong>'.strtoupper($terbilangangka . "Rupiah").'</strong>'; 
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <p class="lead">Kisaran, <?=date("d F Y")?></p>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
                      <?php foreach ($data as $key => $value): ?>
                        <div class="row invoice-info">
                          <div class="col-sm-1 invoice-col">
                            
                          </div>
                          <div class="col-sm-6 invoice-col">
                            Telah dibayar sejumlah <br>
                            Rp. <?= number_format($sumgrand, 2, ',', '.'); ?>
                            <address>
                              Bendahara Pengeluaran<br><br><br><br>
                              <strong>GUSLAN HARAHAP</strong><br>
                              NIP. 198101992000011001<br>
                              
                            </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-5 invoice-col">
                            Telah menerima jumlah uang sebesar <br>
                            Rp. <?= number_format($sumgrand, 2, ',', '.'); ?>
                            <address>
                              Yang Menerima<br><br><br><br>
                              <strong><?=$value->pegawai_nama;?></strong><br>
                              NIP. <?=$value->pegawai_nip;?><br>
                            </address>
                          </div>
                          <!-- /.col -->
                          
                          <!-- /.col -->
                        </div>
                        <?php endforeach?>
                        <!-- /.row -->
                 
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

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

<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- <script src="dist/js/myscript.js"></script> -->
<script>
  window.addEventListener("load", window.print());
</script>

</body>
</html>

