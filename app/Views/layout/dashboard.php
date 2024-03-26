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
          <div class="col">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Foto Kegiatan Perjalanan Dinas</h3>
              </div>
              <div class="card-body">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php foreach ($gambar as $key => $value) : ?>
                      <div class="carousel-item active">
                        <img src="<?= base_url('image/dokuemtasi/'.$value->laporjadin_foto1); ?>" class="rounded mx-auto d-block" alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="<?= base_url('image/dokuemtasi/'.$value->laporjadin_foto2); ?>" class="rounded mx-auto d-block" alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="<?= base_url('image/dokuemtasi/'.$value->laporjadin_foto3); ?>" class="rounded mx-auto d-block" alt="...">
                      </div>
                    <?php endforeach ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col">
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Perjalanan Dinas yang dilakukan setiap bulan Tahun 2024</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 350px; height: 650px; max-height: 650px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  $(function () {
    // Area Chart
    var grafikData = <?= json_encode($grafik) ?>;
    console.log(grafikData);
    var labels = [];
    var data = [];

    grafikData.forEach(function(item) {
                labels.push(item.bulan);
                data.push(item.jumlah);
            });

    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d');

    var areaChartData = {
      labels : labels,
      // labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','Oktober','Nopember','Desember'],
      datasets: [{
        label               : 'Jumlah Perjalanan Dinas',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        borderWidth         : 1,
        pointRadius         : true,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : data,
      }]
    };

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive          : true,
      legend              : {
        display: false
      },
      scales              : {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    };

    // Initialize Bar Chart
    var barChartCanvas = $('#areaChart').get(0).getContext('2d');
    var barChartData = {
      labels  : areaChartData.labels,
      datasets: [{
        label               : 'Jumlah Perjalanan Dinas',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        borderWidth         : 1,
        data                : areaChartData.datasets[0].data
      }]
    };

    var barChartOptions = {
      responsive          : true,
      maintainAspectRatio : false,
      datasetFill         : false
    };

    // Create Bar Chart
    new Chart(barChartCanvas, {
      type   : 'line',
      data   : barChartData,
      options: barChartOptions
    });
  });
</script>

<?= $this->endSection() ?>