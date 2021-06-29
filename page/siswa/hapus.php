<?php

session_start();

$nis = $_GET['nis'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$nis'");
// $_SESSION["sukses"] = 'Data siswa berhasil dihapus!';
// echo "<script>toastr.success('Berhasil terhapus!')</script>";
echo "<script>url:location='./index.php?page=data_siswa'</script>";
