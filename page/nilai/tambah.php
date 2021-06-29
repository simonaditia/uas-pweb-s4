<script>
    function hitungPredikat() {
        var inputUts = document.getElementById('inputUts').value;
        var inputUas = document.getElementById('inputUas').value;
        var inputTugas = document.getElementById('inputTugas').value;
        var inputAbsen = document.getElementById('inputAbsen').value;
        var predikat = (inputUts * 0.3) + (inputUas * 0.4) + (inputTugas * 0.2) + (inputAbsen * 0.1) / 4;
        if (predikat >= 80) {
            hasil = "A";
        } else if (predikat >= 70) {
            hasil = "B";
        } else if (predikat >= 60) {
            hasil = "C";
        } else if (predikat >= 50) {
            hasil = "D";
        } else {
            hasil = "E";
        }
        document.getElementById('predikatId').value = hasil;
    }
</script>
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
                    <li class="breadcrumb-item"><a href="#">Data Nilai</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Nilai</h3>
                    </div>
                    <form action="./index.php?page=proses_tambah_nilai" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nisId">Nomor Induk Siswa</label>
                                <select class="form-control" id="nisId" name="nis">
                                    <option value="0" selected>- Pilih Siswa -</option>
                                    <?php
                                    $tampilSiswa = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama");
                                    while ($ts = mysqli_fetch_array($tampilSiswa)) { ?>
                                        <option value="<?php echo $ts['nis']; ?>"><?php echo $ts['nis'] ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nipId">Nomor Induk Pengajar</label>
                                <select class="form-control" id="nipId" name="nip">
                                    <option value="0" selected>- Pilih Guru -</option>
                                    <?php
                                    $tampilGuru = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nama_guru");
                                    while ($tg = mysqli_fetch_array($tampilGuru)) { ?>
                                        <option value="<?php echo $tg['nip']; ?>"><?php echo $tg['nip']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kdMapelId">Kode Mata Pelajaran</label>
                                <select class="form-control" id="kdMapelId" name="kd_mapel">
                                    <option value="0" selected>- Pilih Mata Pelajaran -</option>
                                    <?php
                                    $tampilMapel = mysqli_query($koneksi, "SELECT * FROM mapel ORDER BY nama_mapel");
                                    while ($tm = mysqli_fetch_array($tampilMapel)) { ?>
                                        <option value="<?php echo $tm['kd_mapel']; ?>"><?php echo $tm['kd_mapel']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputUts">Nilai UTS</label>
                                <div class="input-group">
                                    <input id="inputUts" type="text" name="uts" class="form-control" onchange="hitungPredikat()" placeholder="Nilai UTS" maxlength="10" size="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUas">Nilai UAS</label>
                                <div class="input-group">
                                    <input id="inputUas" type="text" name="uas" class="form-control" onchange="hitungPredikat()" placeholder="Nilai UAS" maxlength="10" size="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTugas">Nilai Tugas</label>
                                <div class="input-group">
                                    <input id="inputTugas" type="text" name="tugas" class="form-control" onchange="hitungPredikat()" placeholder="Nilai Tugas" maxlength="10" size="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAbsen">Nilai Absen</label>
                                <div class="input-group">
                                    <input id="inputAbsen" type="text" name="absen" class="form-control" onchange="hitungPredikat()" placeholder="Nilai Absen" maxlength="10" size="10" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="predikatId">Predikat</label>
                                <div class="input-group">
                                    <input type="text" name="predikat" class="form-control" id="predikatId" placeholder="Predikat" maxlength="1" size="1" required readonly>
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