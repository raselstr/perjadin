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
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Perjalanan Dinas yang dilakukan setiap bulan Tahun 2024</h3>
<!-- 
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
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