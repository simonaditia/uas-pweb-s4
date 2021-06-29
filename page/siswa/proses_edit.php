<?php

session_start();

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];

$dataSiswa = mysqli_query($koneksi, "UPDATE siswa SET nama = '$nama', nip = '$nip' WHERE nis = '$nis'");
if ($dataSiswa) {
    echo '<script language="javascript">swal("Sukses!","Data berhasil diedit!","success").then(() => { window.location="index.php?page=data_siswa"; });</script>';
} else {
    echo '<script language="javascript">swal("Galat!","Data gagal diedit!","error").then(() => { window.location="index.php?page=data_siswa"; });</script>';
}




// $_SESSION["sukses"] = 'Data siswa berhasil diedit!';
// header('Location: ./index.php');
