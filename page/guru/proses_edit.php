<?php

session_start();

$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$hp = $_POST['hp'];

$dataGuru = mysqli_query($koneksi, "UPDATE guru SET nama_guru = '$nama_guru', jk = '$jk', hp = '$hp' WHERE nip = '$nip'");
if ($dataGuru) {
    echo '<script language="javascript">swal("Sukses!","Data berhasil diedit!","success").then(() => { window.location="index.php?page=data_guru"; });</script>';
} else {
    echo '<script language="javascript">swal("Galat!","Data gagal diedit!","error").then(() => { window.location="index.php?page=data_guru"; });</script>';
}




// $_SESSION["sukses"] = 'Data siswa berhasil diedit!';
// header('Location: ./index.php');
