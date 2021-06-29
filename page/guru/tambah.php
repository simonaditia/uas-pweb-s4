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
                    <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
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
                        <h3 class="card-title">Tambah Data Guru</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="./index.php?page=proses_tambah_guru" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nipId">NIP</label>
                                <div class="input-group">
                                    <input type="text" name="nip" class="form-control" id="nipId" placeholder="NIP" maxlength="10" size="10" required auto-focus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaId">Nama Guru</label>
                                <div class="input-group">
                                    <input type="text" name="nama_guru" class="form-control" id="namaId" placeholder="Nama Guru" maxlength="45" size="45" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaId">Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L" required>
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P" required>
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="noHpId">No.Handphone</label>
                                <div class="input-group">
                                    <input name="hp" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control" id="noHpId" placeholder="No.Handphone" maxlength="15" size="15" required>
                                </div>
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