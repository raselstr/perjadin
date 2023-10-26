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
                    <h5 class="m-0">Daftar Pegawai</h5>
                    <div class="flash-data" data-flashdata="<?= session()->getflashdata('info'); ?>"></div>
                  </div>
                  <div class="col-sm-4">
                    <!-- <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#modal-default">
                      Tambah Data Pegawai
                    </button> -->
                    <a href="<?= site_url('pegawai/new'); ?>" type="button" class="btn btn-primary btn-block btn-sm">
                      <i class="fa fa-plus">  Tambah Data Pegawai</i>
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
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Pangkat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($pegawais as $key => $value) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $value->pegawai_nip ?></td>
                          <td><?= $value->pegawai_nama ?></td>
                          <td><?= $value->pegawai_jabatan ?></td>
                          <td><?= $value->eselon_nama ?></td>
                          <td><?= $value->pangkat_nama ?></td>
                          <td><?= $value->pegawai_foto ?></td>
                          <td>
                            <a href="<?= site_url('pegawai/edit/'.$value->pegawai_id); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= site_url('pegawai/remove/'.$value->pegawai_id); ?>" class="btn btn-icon btn-sm btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                            <a href="<?= site_url('pegawai/show/'.$value->pegawai_id); ?>" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-info-circle"></i></a>
                            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" onclick="detail(<?= $value->pegawai_id; ?>)">Detail</button> -->
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


<?= $this->section('script') ?>
  <script>

    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

    const flashData = $('.flash-data').data('flashdata');
    // console.log(flashData);

    if(flashData){
        var Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 5000,
        });
        Toast.fire({
          icon: "success",
          title: flashData,
        });
        // swalDefaultSuccess(flashData, "You clicked the button!", "success");
    }

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
<?= $this->endSection() ?>