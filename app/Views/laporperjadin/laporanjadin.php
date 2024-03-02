<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
      <div class="card-body">
        <!-- <h5> -->
        <table class="table">
          <tr>
            <h5>
              <td colspan="6" class="align-middle text-center"><Strong>LAPORAN PERJALANAN DINAS</Strong></td>
            </h5>
          </tr>
          <tr>
            <td colspan="6" class="align-middle text-center">Ke <?=$data[0]->spt_tempat;?> di <?=$data[0]->lokasiperjadin_nama;?>
            dalam rangka <?=$data[0]->spt_uraian;?></td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <?php if ($pelaksana['jumlah'] >= 1): ?>
          <tr>
            <td rowspan="<?=$pelaksana['jumlah'] + 2?>">I.</td>
            <td rowspan="<?=$pelaksana['jumlah'] + 2?>" width = "25%">Dasar Pelaksanaan</td>
            <td rowspan="<?=$pelaksana['jumlah'] + 2?>">:</td>
            <td width= "2%">1.</td>
            <td colspan="2">Dokumen Pelaksanaan Kegiatan <?=$data[0]->laporjadin_nodpa;?> </td>
          </tr>
          <?php endif?>
          <tr>
            <td>2.</td>
            <td colspan="2">Surat Perintah Tugas dari : <?=$pelaksana["data"][0]->pejabat_namajabatan;?> Nomor : <?=$data[0]->spt_nomor;?> Tanggal <?=date('d F Y', strtotime($data[0]->spt_tgl));?></td>
          </tr>
          <?php
$no = 3;
foreach ($pelaksana["data"] as $key => $value): ?>
          <tr>
            <td><?=$no++;?></td>
            <td colspan="2">Surat Perjalanan Dinas Nomor : <?=$value->sppd_nomor;?> Tanggal <?=date('d F Y', strtotime($value->spt_tgl));?> Atas Nama <?=$value->pegawai_nama;?> (<?=$value->pegawai_jabatan;?>)</td>
          </tr>
          <?php endforeach?>
          <tr>
            <td>II.</td>
            <td>Maksud Perjalanan Dinas</td>
            <td>:</td>
            <td>-</td>
            <td colspan="2"> <?=$data[0]->spt_uraian;?></td>
          </tr>
          <tr>
            <td>III.</td>
            <td>Dinas/ Instansi/ Tempat yang dikunjungi</td>
            <td>:</td>
            <td>-</td>
            <td colspan="2"><?=$data[0]->spt_tempat;?></td>
          </tr>
          <tr>
            <td>IV.</td>
            <td>Waktu Pelaksanaan</td>
            <td>:</td>
            <td>-</td>
            <td colspan="2">Dilaksanakan selama <?=$data[0]->spt_lama;?> hari mulai tanggal <?=date('d F Y', strtotime($data[0]->spt_mulai));?> s.d <?=date('d F Y', strtotime($data[0]->spt_berakhir));?></td>
          </tr>
          <tr>
            <td rowspan="3">V.</td>
            <td rowspan="3">Hasil</td>
            <td rowspan="3">:</td>
            <td>-</td>
            <td colspan="2"><?=$data[0]->laporjadin_pembuka?></td>
          </tr>
          <tr>
            <td>-</td>
            <td colspan="2"><?=$data[0]->laporjadin_hasil?></td>
          </tr>
          <tr>
            <td>-</td>
            <td colspan="2"><?=$data[0]->laporjadin_penutup;?></td>
          </tr>
          <tr>
            <td>VI.</td>
            <td>Penutup</td>
            <td>:</td>
            <td colspan="3">Demikian Laporan Perjalanan Dinas ini dibuat, sebagai bahan Laporan</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3" class="align-middle text-center">Tanggal <?=date('d F Y', strtotime($data[0]->spt_berakhir));?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3" class="align-middle text-center">Yang Membuat Laporan</td>
          </tr>
          <tr>
          <?php
$no = 1;
foreach ($pelaksana["data"] as $key => $value): ?>
          <td></td>
          <td></td>
          <td><?=$no++;?></td>
          <td colspan="2" width="40%">
            <?=$value->pegawai_nama;?><br>
            <?=$value->pegawai_jabatan;?>
          </td>
          <td class="align-bottom text-center">...................................................</td>
        </tr>
        <?php endforeach?>
        </table>
      </div>
    </div>

    <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Dokumentasi</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row mt-4">
                          <div class="col-sm-4">
                            <div class="position-relative">
                              <img src="<?=base_url('image/dokuemtasi/' . $data[0]->laporjadin_foto1)?>" alt="Photo 1" class="img-fluid">
                              <div class="ribbon-wrapper ribbon-xl">
                                <div class="ribbon bg-warning text-lg">
                                  Dokumentasi 1
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="position-relative">
                              <img src="<?=base_url('image/dokuemtasi/' . $data[0]->laporjadin_foto2)?>" alt="Photo 2" class="img-fluid">
                              <div class="ribbon-wrapper ribbon-xl">
                                <div class="ribbon bg-warning text-lg">
                                  Dokumentasi 2
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="position-relative" style="min-height: 180px;">
                              <img src="<?=base_url('image/dokuemtasi/' . $data[0]->laporjadin_foto3)?>" alt="Photo 3" class="img-fluid">
                              <div class="ribbon-wrapper ribbon-xl">
                                <div class="ribbon bg-warning text-lg">
                                  Dokumentasi 3
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      window.addEventListener("load", window.print());
    </script>
  </body>
</html>