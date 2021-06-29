<?php

session_start();

$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$hp = $_POST['hp'];

$pilih = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip = '$nip'");
$jumlahData = mysqli_num_rows($pilih);
if ($jumlahData >= 1) {
    echo '<script language="javascript">swal("Perhatian!","NIP guru sudah ada!","warning").then(() => { window.location="index.php?page=data_guru"; });</script>';
} else {
    $dataGuru = mysqli_query($koneksi, "INSERT INTO guru VALUE('$nip', '$nama_guru', '$jk', '$hp')");
    if ($dataGuru) {
        echo '<script language="javascript">swal("Sukses!","Data berhasil ditambah!","success").then(() => { window.location="index.php?page=data_guru"; });</script>';
    } else {
        echo '<script language="javascript">swal("Galat!","Data gagal ditambah!","error").then(() => { window.location="index.php?page=data_guru"; });</script>';
    }
}


// $_SESSION["sukses"] = 'Data siswa berhasil ditambah!';
// echo "<script>url:location='./index.php?page=data_siswa'</script>";
