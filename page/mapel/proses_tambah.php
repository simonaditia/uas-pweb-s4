<?php

session_start();

$kd_mapel = $_POST['kd_mapel'];
$nama_mapel = $_POST['nama_mapel'];

$pilih = mysqli_query($koneksi, "SELECT * FROM mapel WHERE kd_mapel = '$kd_mapel'");
$jumlahData = mysqli_num_rows($pilih);
if ($jumlahData >= 1) {
    echo '<script language="javascript">swal("Perhatian!","Kode Mata Pelajaran sudah ada!","warning").then(() => { window.location="index.php?page=data_mapel"; });</script>';
} else {
    $dataMapel = mysqli_query($koneksi, "INSERT INTO mapel VALUE('$kd_mapel', '$nama_mapel')");
    if ($dataMapel) {
        echo '<script language="javascript">swal("Sukses!","Data berhasil ditambah!","success").then(() => { window.location="index.php?page=data_mapel"; });</script>';
    } else {
        echo '<script language="javascript">swal("Galat!","Data gagal ditambah!","error").then(() => { window.location="index.php?page=data_mapel"; });</script>';
    }
}
