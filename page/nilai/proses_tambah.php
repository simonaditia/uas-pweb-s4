<?php

session_start();

$id_nilai = "";
$nis = $_POST['nis'];
$nip = $_POST['nip'];
$kd_mapel = $_POST['kd_mapel'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$absen = $_POST['absen'];
$predikat = $_POST['predikat'];


$dataNilai = mysqli_query($koneksi, "INSERT INTO nilai VALUE('$id_nilai', '$nis', '$nip', '$kd_mapel', '$uts', '$uas', '$tugas', '$absen', '$predikat')");
if ($dataNilai) {
    echo '<script language="javascript">swal("Sukses!","Data berhasil ditambah!","success").then(() => { window.location="index.php?page=data_nilai"; });</script>';
} else {
    echo '<script language="javascript">swal("Galat!","Data gagal ditambah!","error").then(() => { window.location="index.php?page=data_nilai"; });</script>';
}



// $_SESSION["sukses"] = 'Data siswa berhasil ditambah!';
// echo "<script>url:location='./index.php?page=data_siswa'</script>";
