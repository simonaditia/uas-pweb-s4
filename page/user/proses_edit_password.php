<?php

session_start();

$iduser = $_POST['iduser'];
$passwordBaru = md5($_POST['password_baru']);
$passwordKonfirmasi = md5($_POST['password_konfirmasi']);

if ($passwordBaru != $passwordKonfirmasi) {
    echo '<script language="javascript">swal("Perhatian!","Password Baru tidak sama dengan Konfirmasi Password!","warning").then(() => { window.location="index.php?page=dashboard"; });</script>';
} else if ($passwordBaru == $passwordKonfirmasi) {
    $editPassword = mysqli_query($koneksi, "UPDATE user SET password = '$passwordKonfirmasi' WHERE iduser = '$iduser'");
    if ($editPassword) {
        echo '<script language="javascript">swal("Sukses!","Password berhasil diedit!","success").then(() => { window.location="index.php?page=dashboard"; });</script>';
    } else {
        echo '<script language="javascript">swal("Galat!","Password gagal diedit!","error").then(() => { window.location="index.php?page=dashboard"; });</script>';
    }
}





// $_SESSION["sukses"] = 'Data siswa berhasil diedit!';
// header('Location: ./index.php');
