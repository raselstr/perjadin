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
                      <small class="float-right">Date: </small>
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
                    <b>Tanggal SPD : </b><?=date('d F Y', strtotime($value->spt_nomor));?><br>
                  </div>
                  <!-- /.col -->
                </div>
                <?php endforeach ?>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-bordered">
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
                          foreach ($all as $key => $value) : ?>
                            <?php $pelaksana_id = $value->pelaksana_id; ?>
                        <tr>
                          <td rowspan="6"><?= $no++; ?></td>
                          <td style="width:23%" rowspan="6"><i><?= $value->pegawai_nama; ?><br>NIP. <?= $value->pegawai_nip; ?></i></td>
                          <td colspan="2">Uang Harian</td>
                          <td style="width:20%"></td>
                          <td></td>
                          <td class="align-middle text-right">99.000.000,00</td>
                          <td class="align-top text-right" rowspan="6"><strong>99.000.000,00</strong></td>
                        </tr>
                        <?php $qrpesawat = $model->rampungpesawat($pelaksana_id);?>
                        <tr>
                          <td colspan="5">Biaya Trasportasi</td>
                        </tr>
                        <tr>
                          <td style="width:2%"></td>
                          <td>Pesawat</td>
                          <td>
                            <?php foreach ($qrpesawat as $key => $value): ?>
                              <i><?=$value->spjpesawat_jenis?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php foreach ($qrpesawat as $key => $value): ?>
                              <i><?=number_format($value->spjpesawat_harga,0,',','.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-top text-right">
                            <?php $total = 0; 
                              foreach ($qrpesawat as $key => $value) {
                              $subtotal = intval($value->spjpesawat_harga);
                              $total += $subtotal;
                            } ?>
                            <?= number_format($total,2,',','.'); ?>
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
                              <i><?=number_format($value->spjtaksi_harga,0,',','.')?></i><br>
                            <?php endforeach?>
                          </td>
                          <td class="align-middle text-right">
                            <?php $total = 0; 
                              foreach ($qrtaksi as $key => $value) {
                              $subtotal = intval($value->spjtaksi_harga);
                              $total += $subtotal;
                            } ?>
                            <?= number_format($total,2,',','.'); ?>
                          </td>
                        </tr>
                        <?php $qrhotel = $model->rampunghotel($pelaksana_id);?>
                        <tr>
                          <td colspan="4">Biaya Penginapan</td>
                          <td class="align-middle text-right">
                            <?php $total = 0; 
                              foreach ($qrhotel as $key => $value) {
                              $subtotal = intval($value->spjhotel_mlm) * intval($value->spjhotel_hargapermalam);
                              $total += $subtotal;
                            } ?>
                            <?= number_format($total,2,',','.'); ?>
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
                              <i>= &nbsp;&nbsp;&nbsp;<?= number_format(intval($value->spjhotel_mlm) * intval($value->spjhotel_hargapermalam),0,',','.') ?></i><br>
                              <?php endforeach ?>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
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
                    <p class="lead">Dikeluarkan Tanggal 2/22/2014</p>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Total Keselruhan :</th>
                          <td class="align-middle text-right"><strong>99.000.000,00</strong></td>
                        </tr>
                        <tr>
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
                    <a href="pembayaran.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                      Payment
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                      <i class="fas fa-download"></i> Generate PDF
                    </button>
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