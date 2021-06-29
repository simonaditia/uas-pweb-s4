<?php

session_start();

$kd_mapel = $_POST['kd_mapel'];
$nama_mapel = $_POST['nama_mapel'];

$dataMapel = mysqli_query($koneksi, "UPDATE mapel SET nama_mapel = '$nama_mapel' WHERE kd_mapel = '$kd_mapel'");
if ($dataMapel) {
    echo '<script language="javascript">swal("Sukses!","Data berhasil diedit!","success").then(() => { window.location="index.php?page=data_mapel"; });</script>';
} else {
    echo '<script language="javascript">swal("Galat!","Data gagal diedit!","error").then(() => { window.location="index.php?page=data_mapel"; });</script>';
}
