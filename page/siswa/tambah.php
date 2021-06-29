<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data</h1>
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
                    <li class="breadcrumb-item active">Tambah Data</li>
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
                        <h3 class="card-title">Tambah Data Siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./index.php?page=proses_tambah_siswa" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nisId">Nomor Induk Siswa</label>
                                <div class="input-group">
                                    <input type="text" name="nis" class="form-control" id="nisId" placeholder="NIS" maxlength="10" size="10" required auto-focus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaId">Nama</label>
                                <div class="input-group">
                                    <input type="text" name="nama" class="form-control" id="namaId" placeholder="Nama Siswa" maxlength="50" size="50" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nipId">Nomor Induk Pengajar</label>
                                <select class="form-control" id="nipId" name="nip" required>
                                    <option value="" selected>- Pilih Nomor Induk Pengajar -</option>
                                    <?php
                                    $sql = "SELECT * FROM guru";
                                    echo $sql['nip'];
                                    $hasil = mysqli_query($koneksi, $sql);
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;
                                        $ket = "";
                                        if (isset($_GET['nip'])) {
                                            $nip = trim($_GET['nip']);

                                            if ($nip == $data['nip']) {
                                                $ket = "selected";
                                            }
                                        }
                                    ?>
                                        <option <?php echo $ket; ?> value="<?php echo $data['nip']; ?>"><?php echo $data['nip']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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