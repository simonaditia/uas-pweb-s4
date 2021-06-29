<?php
$halaman = "Dashboard";
$dataSiswa = mysqli_query($koneksi, "SELECT * FROM siswa");
$ds = mysqli_num_rows($dataSiswa);

$dataGuru = mysqli_query($koneksi, "SELECT * FROM guru");
$dg = mysqli_num_rows($dataGuru);

$dataMapel = mysqli_query($koneksi, "SELECT * FROM mapel");
$dm = mysqli_num_rows($dataMapel);

$dataNilai = mysqli_query($koneksi, "SELECT * FROM nilai");
$dn = mysqli_num_rows($dataNilai);

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $ds ?></h3>

                        <p>Data Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="index.php?page=data_siswa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo $dg; ?></h3>

                        <p>Data Guru</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-chalkboard-teacher"></i>
                    </div>
                    <a href="index.php?page=data_guru" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 class="text-white"><?php echo $dm; ?></h3>

                        <p class="text-white">Data Mata Pelajaran</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="index.php?page=data_mapel" class="small-box-footer"><span class="text-white">Selengkapnya <i class="fas fa-arrow-circle-right"></i></span></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo $dn; ?></h3>

                        <p>Data Nilai</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="index.php?page=data_nilai" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- DONUT CHART -->

                <!-- /.card -->

                <!-- PIE CHART -->
                <div class="card card-danger">
                    <div class="card-body">
                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Data Siswa',
                'Data Guru',
                'Data Mata Pelajaran',
                'Data Nilai',
            ],
            datasets: [{
                data: [<?php echo $ds; ?>, <?php echo $dg; ?>, <?php echo $dm; ?>, <?php echo $dn; ?>],
                backgroundColor: ['#00c0ef', '#00a65a', '#f39c12', '#f56954'],
            }]
            // '#3c8dbc', '#d2d6de'
        }
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

    })
</script>