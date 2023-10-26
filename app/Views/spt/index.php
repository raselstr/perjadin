<?= $this->extend('layout/default'); ?>

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
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-8">
                    <h5 class="m-0"><?= $title; ?></h5>
                    <div class="flash-data" data-flashdata="<?= session()->getflashdata('info'); ?>"></div>
                  </div>
                  <div class="col-sm-4">
                    <!-- <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#modal-default">
                      Tambah Data Pegawai
                    </button> -->
                    <a href="<?= site_url('spt/new'); ?>" type="button" class="btn btn-primary btn-block btn-sm">
                      <i class="fa fa-plus">  Tambah Surat Perintah Tugas</i>
                    </a>
                  </div>
                </div>
              </div>
              

              <div class="card-body">
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor SPT</th>
                    <th>Pejabat Pemberi Tugas</th>
                    <th>Dasar Perjalanan Dinas</th>
                    <th>Uraian Perjalanan</th>
                    <th>Lama Perjalanan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Tempat Tujuan</th>
                    <th>Transportasi yang digunakan</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($spt as $key => $value) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $value->spt_no ?></td>
                          <td><?= $value->spt_pjb_tugas ?></td>
                          <td><?= $value->spt_dasar ?></td>
                          <td><?= $value->spt_uraian ?></td>
                          <td><?= $value->spt_lama ?></td>
                          <td><?= $value->spt_mulai ?></td>
                          <td><?= $value->spt_berakhir ?></td>
                          <td><?= $value->spt_tujuan ?></td>
                          <td><?= $value->spt_transport ?></td>
                          <td>
                            <a href="<?= site_url('spt/edit/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= site_url('spt/remove/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                            <a href="<?= site_url('spt/show/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-info-circle"></i></a>
                            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" onclick="detail(<?= $value->spt_id; ?>)">Detail</button> -->
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Pangkat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
    <!-- /.content -->

   
<?= $this->endSection() ?>