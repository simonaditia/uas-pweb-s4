<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data</h1>
            </div>
            <div class="col-sm-6">
                <div class="row justify-content-end">
                    <a href="javascript:history.back()"><button type="button" class="btn btn-secondary">Kembali</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php
                    // include "../koneksi.php";
                    $nis = $_GET['nis'];
                    $dataa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis = '$nis'");
                    while ($d = mysqli_fetch_array($dataa)) {
                    ?>
                        <form action="./index.php?page=proses_edit_siswa" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nisId">Nomor Induk Siswa</label>
                                    <div class="input-group">
                                        <input type="text" name="nis" value="<?php echo $d['nis']; ?>" class="form-control" id="nisId" placeholder="NIS" maxlength="10" size="10" required auto-focus readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaId">Nama</label>
                                    <div class="input-group">
                                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" id="namaId" placeholder="Nama Siswa" maxlength="50" size="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nipId">Nomor Induk Guru</label>
                                    <select class="form-control" id="nipId" name="nip">
                                        <?php
                                        // include "../koneksi.php";
                                        $sql = "SELECT * FROM guru";
                                        $guru = mysqli_query($koneksi, $sql);
                                        function getSelected($x, $y)
                                        {
                                            if ($x == $y) {
                                                return "selected";
                                            }
                                        }
                                        while ($dataGuru = mysqli_fetch_array($guru)) {
                                        ?>
                                            <option value="<?php echo $dataGuru['nip']; ?>" <?php echo getSelected($d['nip'], $dataGuru[0]) ?>>
                                                <?php echo $dataGuru['nip']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- general form elements -->


            </div>
            <!-- /.card -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->