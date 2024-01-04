
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
            <div class="row">
              <h5 class="card-title"><?= $title; ?></h5>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="card-body">
                <a href="" type="button" class="btn bg-gradient-primary">Tambah SPJ Pesawat</a>
              </div>
            </div>
            <div class="row">
              <div class="card-body">
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
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  <script>
    $(function () {
      $("#myTable1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": false,
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
        var hotelid = $(this).data('id');
        var idpelaksana = $(this).data('idpelaksana');
        var namapegawai = $(this).data('namapegawai');
        var nospt = $(this).data('nospt');

        $('#hotel_id').val(hotelid);
        $('#hotel_pelaksanaid').val(idpelaksana);
        $('#hotel_namapegawai').val(namapegawai);
        $('#hotel_nospt').val(nospt);

        if (hotelid !== null) {
          $.ajax({
            type: "get",
            url: "<?= site_url('spjhotel/edit/'); ?>" + hotelid,
            // data: "data",
            dataType: "json",
            success: function (response) {
              console.log(response);
              $('#hotel_id').val(response.hotel_id);
              $('#hotel_fotolama').val(response.hotel_foto);
              $('#hotel_nama').val(response.hotel_nama);
              $('#hotel_nokamar').val(response.hotel_nokamar);
              $('#hotel_typekamar').val(response.hotel_typekamar);
              $('#hotel_checkin').val(response.hotel_checkin);
              $('#hotel_checkout').val(response.hotel_checkout);
              $('#hotel_permlm').val(response.hotel_permlm);
              $('#hotel_totalharga').val(response.hotel_totalharga);
              $('#nama-foto').text(response.hotel_foto);
              $('#nama-scan').text(response.hotel_bill);
              $('#hotel_billlama').val(response.hotel_bill);
              
              // Menampilkan nama file foto dan scan dengan ekstensinya
              // var namaFoto = response.hotel_foto.split('.').slice(0, -1).join('.');
              // var ekstensiFoto = response.hotel_foto.split('.').pop();
              // var namaScan = response.hotel_bill.split('.').slice(0, -1).join('.');
              // var ekstensiScan = response.hotel_bill.split('.').pop();

              // $('#nama-foto').text(namaFoto + '.' + ekstensiFoto);
              // $('#nama-scan').text(namaScan + '.' + ekstensiScan);
              $('#hotelspj').show();
            } 
          });
        } else {
          $('#hotel_nama').val('');
          $('#hotel_nokamar').val('');
          $('#hotel_typekamar').val('');
          $('#hotel_checkin').val('');
          $('#hotel_checkout').val('');
          $('#hotel_permlm').val('');
          $('#hotel_totalharga').val('');
          $('#nama-foto').text('');
          $('#nama-scan').text('');
          $('#hotelspj').show();
        }
      });

      $('#foto').on('change', function() {
          // Mengambil nama file yang dipilih
          var fileName = $(this).val().split('\\').pop();
          
          // Menampilkan nama file di console (opsional)
          console.log('Nama file:', fileName);

          // Melakukan apa pun yang Anda inginkan dengan nama file tersebut
          // Contohnya, menampilkan nama file di elemen dengan ID 'nama-foto'
          $('#nama-foto').text(fileName);
      });

      $('#scan').on('change', function() {
          // Mengambil nama file yang dipilih
          var fileName = $(this).val().split('\\').pop();
          
          // Menampilkan nama file di console (opsional)
          console.log('Nama file:', fileName);

          // Melakukan apa pun yang Anda inginkan dengan nama file tersebut
          // Contohnya, menampilkan nama file di elemen dengan ID 'nama-foto'
          $('#nama-scan').text(fileName);
      });
      

      $('#formpesawat').submit(function(e){
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
              if(response.message.hotel_nama){
                      $('#hotel_nama').addClass('is-invalid');
                      $('.errorhotel_nama').html(response.message.hotel_nama);
                  } else {
                      $('#hotel_nama').removeClass('is-invalid');
                      $('.errorhotel_nama').html('');
                  }
              if(response.message.hotel_nokamar){
                      $('#hotel_nokamar').addClass('is-invalid');
                      $('.errorhotel_nokamar').html(response.message.hotel_nokamar);
                  } else {
                      $('#hotel_nokamar').removeClass('is-invalid');
                      $('.errorhotel_nokamar').html('');
                  }
              if(response.message.hotel_typekamar){
                      $('#hotel_typekamar').addClass('is-invalid');
                      $('.errorhotel_typekamar').html(response.message.hotel_typekamar);
                  } else {
                      $('#hotel_typekamar').removeClass('is-invalid');
                      $('.errorhotel_typekamar').html('');
                  }
              if(response.message.hotel_checkin){
                      $('#hotel_checkin').addClass('is-invalid');
                      $('.errorhotel_checkin').html(response.message.hotel_checkin);
                  } else {
                      $('#hotel_checkin').removeClass('is-invalid');
                      $('.errorhotel_checkin').html('');
                  }
              if(response.message.hotel_checkout){
                      $('#hotel_checkout').addClass('is-invalid');
                      $('.errorhotel_checkout').html(response.message.hotel_checkout);
                  } else {
                      $('#hotel_checkout').removeClass('is-invalid');
                      $('.errorhotel_checkout').html('');
                  }
              if(response.message.hotel_permlm){
                      $('#hotel_permlm').addClass('is-invalid');
                      $('.errorhotel_permlm').html(response.message.hotel_permlm);
                  } else {
                      $('#hotel_hargapermlm').removeClass('is-invalid');
                      $('.errorhotel_hargapermlm').html('');
                  }
              if(response.message.hotel_foto){
                      $('#foto').addClass('is-invalid');
                      $('.errorhotel_foto').html(response.message.hotel_foto);
                  } else {
                      $('#foto').removeClass('is-invalid');
                      $('.errorhotel_foto').html('');
                  }
              if(response.message.hotel_bill){
                      $('#scan').addClass('is-invalid');
                      $('.errorhotel_bill').html(response.message.hotel_bill);
                  } else {
                      $('#hotel_bill').removeClass('is-invalid');
                      $('.errorhotel_bill').html('');
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
<?= $this->endSection() ?>