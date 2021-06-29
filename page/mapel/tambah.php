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
                    <li class="breadcrumb-item"><a href="#">Data Mapel</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Mapel</h3>
                    </div>
                    <form action="./index.php?page=proses_tambah_mapel" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="mapelId">Kode Mata Pelajaran</label>
                                <div class="input-group">
                                    <input type="text" name="kd_mapel" class="form-control" id="mapelId" placeholder="Kode Mata Pelajaran" maxlength="5" size="5" required auto-focus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaMapelId">Nama Mata Pelajaran</label>
                                <div class="input-group">
                                    <input type="text" name="nama_mapel" class="form-control" id="namaMapelId" placeholder="Nama Mata Pelajaran" maxlength="45" size="45" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>