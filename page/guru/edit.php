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
                    <li class="breadcrumb-item"><a href="#">Data Guru</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>
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
                        <h3 class="card-title">Edit Data Guru</h3>
                    </div>
                    <?php
                    // include "../koneksi.php";
                    $nip = $_GET['nip'];
                    $dataa = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip = '$nip'");
                    while ($d = mysqli_fetch_array($dataa)) {
                    ?>
                        <form action="./index.php?page=proses_edit_guru" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nipId">NIP</label>
                                    <div class="input-group">
                                        <input type="text" name="nip" value="<?php echo $d['nip']; ?>" class="form-control" id="nipId" placeholder="NIS" maxlength="10" size="10" required auto-focus readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaGuruId">Nama Guru</label>
                                    <div class="input-group">
                                        <input type="text" name="nama_guru" value="<?php echo $d['nama_guru']; ?>" class="form-control" id="namaGuruId" placeholder="Nama Guru" maxlength="50" size="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaId">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L" <?php if ($d['jk'] == "L") echo 'checked'; ?> required>
                                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P" <?php if ($d['jk'] == "P") echo 'checked'; ?> required>
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="noHpId">No.Handphone</label>
                                    <div class="input-group">
                                        <input name="hp" value="<?php echo $d['hp']; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" class="form-control" id="noHpId" placeholder="No.Handphone" maxlength="15" size="15" required>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
    </div>
</section>