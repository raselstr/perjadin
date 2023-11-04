<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <base href="<?= base_url('templates'); ?>/">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    
</head>
<body>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <div class="row">
              <img src="<?= base_url("images/kop.jpg"); ?>" alt="" sizes="100%" srcset="">
            </div>
            <div class="row ">
              <div class="card-body row">
                <div class="col text-center d-flex align-items-center justify-content-center">
                  <div class="">
                    <h1> <strong>SURAT PERINTAH TUGAS</strong></h1>
                    <p><h3><strong>Nomor : 800.1.11.1/......../BKAD/..../2023</strong></h3></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="grip gap-12 col d-flex">
                <h3>Yang bertanda tangan di bawah ini :</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-2">
                <h3>Nama </h3>
                <h3>NIP </h3>
                <h3>Pangkat/Gol </h3>
                <h3>Jabatan </h3>
              </div>
              <div class="col-md-auto">
                <h3>: </h3>
                <h3>: </h3>
                <h3>: </h3>
                <h3>: </h3>
              </div>
              <div class="col-md-8">
                <h3>nama </h3>
                <h3>nip </h3>
                <h3>pangkat </h3>
                <h3>jabatan </h3>
              </div>
            </div>
            <div class="grip gap-12 ">
              <div class="p-4 g-col text-center d-flex align-items-center justify-content-center">
                <h3>MEMERINTAHKAN </h3>
              </div>
            </div>
            <div class="row">
              <div class="grip gap-12 ">
                <div class="p-4 g-col">
                  <h3>Kepada : </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   
              <table id="tes" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2" class="align-middle text-center">No</th>
                    <th rowspan="2" class="align-middle text-center">Pejabat Pemberi Tugas</th>
                    <th colspan="3" class="align-middle text-center">Data Perjalanan Dinas</th>
                    <th rowspan="2" class="align-middle text-center">Transportasi yang digunakan</th>
                    <th rowspan="2" class="align-middle text-center">Tanggal dibuat</th>
                    <th rowspan="2" class="align-middle text-center">Pelaksana</th>
                    <th rowspan="2" class="align-middle text-center">aksi</th>
                  </tr>
                  <tr>
                    <th class="align-middle text-center">Uraian Perjalanan</th>
                    <th class="align-middle text-center">Lama Perjalanan</th>
                    <th class="align-middle text-center">Tempat Tujuan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($spt as $key => $value) { ?>
                      <tr>
                        <td class="align-middle text-center"><?= $no++ ?></td>
                        <td class="align-middle"><?= $value->spt_pjb_tugas ?></td>
                        <td class="align-middle"><?= $value->spt_uraian ?></td>
                        <td class="align-middle text-center"><?= $value->spt_lama ?></td>
                        <td class="align-middle"><?= $value->spt_tujuan ?></td>
                        <td class="align-middle"><?= $value->spt_transport ?></td>
                        <td class="align-middle text-center"><?= $value->updated_at ?></td>
                        <td class="align-middle text-center">
                            <a href="<?= site_url('spt/pelaksana/'.$value->spt_id); ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a></td>
                        <td class="align-middle text-center">
                          <a href="<?= site_url('spt/edit/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= site_url('spt/remove/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                          <a href="<?= site_url('spt/show/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-info-circle"></i></a>
                          <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" onclick="detail(<?= $value->spt_id; ?>)">Detail</button> -->
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>

