<?php

session_start();

$id_nilai = $_POST['id_nilai'];
$nis = $_POST['nis'];
$nip = $_POST['nip'];
$kd_mapel = $_POST['kd_mapel'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$absen = $_POST['absen'];
$predikat = $_POST['predikat'];

$dataNilai = mysqli_query($koneksi, "UPDATE nilai SET nis = '$nis', nip = '$nip', kd_mapel = '$kd_mapel', uts = '$uts', uas = '$uas', tugas = '$tugas', absen = '$absen', predikat = '$predikat' WHERE id_nilai = '$id_nilai'");
if ($dataNilai) {
    echo '<script language="javascript">swal("Sukses!","Data berhasil diedit!","success").then(() => { window.location="index.php?page=data_nilai"; });</script>';
} else {
    echo '<script language="javascript">swal("Galat!","Data gagal diedit!","error").then(() => { window.location="index.php?page=data_nilai"; });</script>';
}




// $_SESSION["sukses"] = 'Data siswa berhasil diedit!';
// header('Location: ./index.php');
