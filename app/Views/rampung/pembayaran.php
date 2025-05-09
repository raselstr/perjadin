<?php use App\Models\RampungModel;
  $model = new RampungModel();
  
?>

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
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="callout callout-info">
                <div class="row">
                  <div class="col-8">
                    <h5><i class="fas fa-info"></i> Perhitungan Rampung:</h5>
                    Perhitungan Rampung seluruh bukti pengeluaran biaya Perjalanan Dinas
                  </div>
                  <div class="col-4">
                    <a href="<?= site_url('rampung'); ?>" type="button" class="btn bg-gradient-warning float-right" ><i class="fas fa-hand-point-left"> </i> Kembali</a>
                  </div>
                </div>
              </div>


              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <i class="fas fa-globe"></i> BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN.
                      <small class="float-right">Date: <?= date("d F Y") ?></small>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <?php foreach ($data as $key => $value) : ?>
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    Dari
                    <address>
                      <strong>GUSLAN HARAHAP</strong><br>
                      NIP. 198101992000011001<br>
                      Jabatan : BENDAHARA PENGELUARAN<br>    
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    Kepada
                    <address>
                      <strong><?= $value->pegawai_nama; ?></strong><br>
                      NIP. <?= $value->pegawai_nip; ?><br>
                      Jabatan : <?= $value->pegawai_jabatan; ?><br>
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Lampiran SPD Nomor : <?= $value->sppd_nomor; ?></b><br>
                    <br>
                    <b>Tanggal SPD : </b><?=date('d F Y', strtotime($value->spt_tgl));?><br>
                  </div>
                  <!-- /.col -->
                </div>
                <?php endforeach ?>
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
                          $sptid =0; 
                          foreach ($all as $key => $value) : ?>
                            <?php 
                              $pelaksana_id = $value->pelaksana_id; 
                              $sptid = $value->spt_id;
                            ?>
                        <tr>
                          <?php $qrharian = $model->rampungharian($pelaksana_id);?>
                          <td rowspan="8"><?= $no++; ?></td>
                          <td style="width:23%" rowspan="8"><i><?= $value->pegawai_nama; ?><br>NIP. <?= $value->pegawai_nip; ?></i></td>
                          <td colspan="2" style="width:20%">
                            Uang Harian <?= $qrharian[0]->uangharian_jlhhari; ?> hari ( <?= $qrharian[0]->uangharian_jumlahpersen; ?> )<br>
                            Uang Harian Sesuai Undangan selama <?= $qrharian[0]->uangharian_hariundangan; ?> hari
                          </td>
                          <td style="width:20%" class="align-middle text-right" colspan="2">
                            <?php $totharian1 = 0;
                            $totharian2 = 0;
                              foreach ($qrharian as $key => $harians): ?>
                              <i><?=$harians->uangharian_jlhhari?> hari x Rp. <?= $harian = number_format($harians->uangharian_perhari,0,',','.'); $totharian1 = $harians->uangharian_jumlah?></i><br>
                              <i><?=$harians->uangharian_hariundangan?> hari x Rp. <?= $harian = number_format($harians->uangharian_harianundangan,0,',','.'); $totharian2 = $harians->uangharian_jlhharianundangan?></i>
                              <?php endforeach?>
                            </td>
                            <td class="align-middle text-right">
                              <?= number_format($totharian1,2,',','.'); ?><br>
                              <?= number_format($totharian2,2,',','.'); ?>
                            </td>
                          <td class="align-top text-right" rowspan="8"><strong></strong></td>
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
                              <i><?=number_format($value->spjpesawat_harga,0,',','.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-top text-right" style="width:15%">
                            <?php $total2 = 0; 
                              foreach ($qrpesawat as $key => $value) {
                              $subtotal = intval($value->spjpesawat_harga);
                              $total2 += $subtotal;
                            } ?>
                            <?= number_format($total2,2,',','.'); ?>
                          </td>
                        </tr>
                        <?php $qrtaksi = $model->rampungtaksi($pelaksana_id);?>
                        <tr>
                          <td></td>
                          <td>Transportasi Darat/ Taksi</td>
                          <td>
                            <?php foreach ($qrtaksi as $key => $value): ?>
                              <i><?=$value->spjtaksi_jenis?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrtaksi as $key => $value): ?>
                              <i><?=number_format($value->spjtaksi_harga,0,',','.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php $total3 = 0; 
                              foreach ($qrtaksi as $key => $value) {
                              $subtotal = intval($value->spjtaksi_harga);
                              $total3 += $subtotal;
                            } ?>
                            <?= number_format($total3,2,',','.'); ?>
                          </td>
                        </tr>
                        <!-- <tr>
                          <td></td>
                          <td >Pengganti Biaya Transport</td>
                          <td colspan="2" class="align-middle text-right">
                            <?php foreach ($qrharian as $key => $harian): ?>
                              <i><?=$harian->uangharian_lama?> hari x Rp. <?=number_format($harian->uangharian_biayatransport,0,',','.')?></i><br>
                            </td>
                            <td class="align-middle text-right">
                              <?= number_format($harian->uangharian_jumlahbiayatransport,2,',','.'); ?>
                            </td>
                            <?php endforeach?>
                        </tr> -->
                        <?php $qrhotel = $model->rampunghotel($pelaksana_id);?>
                        <tr>
                          <td colspan="4">Biaya Penginapan</td>
                          <td class="align-middle text-right">
                            <?php $total4 = 0; 
                              foreach ($qrhotel as $key => $value) {
                              $subtotal = intval($value->spjhotel_hargatotal);
                              $total4 += $subtotal;
                            } ?>
                            <?= number_format($total4,2,',','.'); ?>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                          <?php foreach ($qrhotel as $key => $value): ?>  
                            <i><?=$value->spjhotel_nama?></i><br>
                          <?php endforeach ?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrhotel as $key => $value): ?>
                            <i><?= $value->spjhotel_mlm ?> <i>mlm</i> x Rp.   <?= number_format($value->spjhotel_hargapermalam,0,',','.') ?> </i><br>
                            <?php endforeach ?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrhotel as $key => $value): ?>
                              <i>= &nbsp;&nbsp;&nbsp;<?= number_format(intval($value->spjhotel_hargatotal),0,',','.') ?></i><br>
                            <?php endforeach ?>
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
                              <i><?=$lama?> hari x Rp. <?= number_format($representasi,0,',','.'); ?></i><br>
                              <?php endforeach?>
                            </td>
                            <td class="align-middle text-right">
                              <?= number_format($jlhrepresentasi,2,',','.'); ?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">Sewa Kendaraan / 8 jam</td>
                          <td style="width:20%" class="align-middle text-right" colspan="2">
                              <i><?=$lama?> kali x Rp. <?= number_format($sewa,0,',','.'); ?></i><br>
                            </td>
                            <td class="align-middle text-right">
                            <?= number_format($jlhsewamobil,2,',','.'); ?>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="7" class="align-middle text-right"><strong> Sub Total</strong></td>
                          <td class="align-middle text-right">
                            <strong>
                              <?php $subtotal = $model->rampungperpelaksana($sptid, $pelaksana_id);?>
                              <?php foreach ($subtotal as $key => $sub): ?>
                                <?= number_format($sub->subtotal,2,',','.'); ?>
                              <?php endforeach ?>
                            </strong>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="8"></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-6">
                    <p class="lead">Metode Pembayaran :</p>
                    <img src="dist/img/credit/visa.png" alt="Visa">
                    <img src="dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="dist/img/credit/american-express.png" alt="American Express">
                    <img src="dist/img/credit/paypal2.png" alt="Paypal">

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      Semua bukti telah diperiksa dan diverifikasi kemudian dinyatakan sah,
                      Total perhitungan rampung telah dibuktikan dengan dokumen pembayaran asli
                      sebagai pertanggungjawaban Perjalanan Dinas.
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-6">
                    <p class="lead">Dikeluarkan Tanggal : <?= date("d F Y") ?></p>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Total Keseluruhan :</th>
                          <td class="align-middle text-right">
                            <strong>
                              <?php $sumgrand = 0; 
                                foreach ($all as $key => $value) : 
                                    $pelaksana_id = $value->pelaksana_id; 
                                    $sptid = $value->spt_id;
                                    $grand = $model->rampungperpelaksana($sptid, $pelaksana_id);
                                    foreach ($grand as $key => $grandtotal):
                                      $sumtotal = intval($grandtotal->subtotal);
                                      $sumgrand += $sumtotal;
                                    endforeach;
                                endforeach;
                                echo number_format($sumgrand,2,',','.'); 
                              ?>
                            </strong>
                          </td>
                          <tr>
                        </tr>
                          <th></th>
                          <td></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a href="<?= site_url('rampung/formcetak/'.$sptid); ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
  </div>
  

  

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>