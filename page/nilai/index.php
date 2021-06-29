<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Nilai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Nilai</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="index.php?page=tambah_nilai" class="btn btn-md btn-success" style="margin-bottom: 10px;">Tambah Data</a>
                    </div>
                    <div class="card-body" id="iniDiv">
                        <table id="example1" class="table table-bordered table-striped tableNilai">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Nama Siswa</th>
                                    <th>Nip</th>
                                    <th>Nama Guru</th>
                                    <th>Kode Mapel</th>
                                    <th>Nama Mapel</th>
                                    <th>UTS</th>
                                    <th>UAS</th>
                                    <th>Tugas</th>
                                    <th>Absen</th>
                                    <th>Nilai Rata-rata</th>
                                    <th>Predikat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // include "../koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM nilai");
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) {
                                    $tampilSiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$d[nis]'");
                                    $ts = mysqli_fetch_array($tampilSiswa);
                                    $tampilGuru = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$d[nip]'");
                                    $tg = mysqli_fetch_array($tampilGuru);
                                    $tampilMapel = mysqli_query($koneksi, "SELECT * FROM mapel WHERE kd_mapel='$d[kd_mapel]'");
                                    $tm = mysqli_fetch_array($tampilMapel);
                                    $rata2 = ($d['uts'] * 0.3) + ($d['uas'] * 0.4) + ($d['tugas'] * 0.2) + ($d['absen'] * 0.1) / 4;
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nis']; ?></td>
                                        <td><?php echo $ts['nama']; ?></td>
                                        <td><?php echo $d['nip']; ?></td>
                                        <td><?php echo $tg['nama_guru']; ?></td>
                                        <td><?php echo $d['kd_mapel']; ?></td>
                                        <td><?php echo $tm['nama_mapel']; ?></td>
                                        <td><?php echo $d['uts']; ?></td>
                                        <td><?php echo $d['uas']; ?></td>
                                        <td><?php echo $d['tugas']; ?></td>
                                        <td><?php echo $d['absen']; ?></td>
                                        <td><?php echo $rata2 ?></td>
                                        <td><?php echo $d['predikat']; ?></td>
                                        <td class="text-center">
                                            <a href="./index.php?page=edit_nilai&id_nilai=<?php echo $d['id_nilai']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <button class="btn btn-sm btn-danger hapus-data">Hapus</button>
                                            <input type="hidden" class="the_id_nilai" value='<?php echo $d['id_nilai']; ?>'>
                                            <input type="hidden" class="the_id_nilai_nis" value='<?php echo $d['nis']; ?>'>
                                            <a href="./index.php?page=cetak_nilai&id_nilai=<?php echo $d['id_nilai']; ?>" class="btn btn-sm btn-warning" target="_blank">Cetak</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.tableNilai').on("click", ".hapus-data", function(e) {
        var id = $(this).closest('td').find('.the_id_nilai').val();
        var nis = $(this).closest('td').find('.the_id_nilai_nis').val();
        console.log(id);
        console.log(nis);
        console.log('index.php?page=hapus_nilai&id_nilai=' + id);
        swal({
                title: "Apakah anda yakin?",
                text: "Ingin menghapus data Nilai dengan Nis " + nis,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Sukses! Data berhasil terhapus!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "index.php?page=hapus_nilai&id_nilai=" + id;
                    });
                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });

    });
</script>