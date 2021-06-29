<?php

session_start();

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];

$pilih = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis = '$nis'");
$jumlahData = mysqli_num_rows($pilih);
if ($jumlahData >= 1) {
    echo '<script language="javascript">swal("Perhatian!","Nis siswa sudah ada!","warning").then(() => { window.location="index.php?page=data_siswa"; });</script>';
} else {
    $dataSiswa = mysqli_query($koneksi, "INSERT INTO siswa VALUE('$nis', '$nama', '$nip')");
    if ($dataSiswa) {
        echo '<script language="javascript">swal("Sukses!","Data berhasil ditambah!","success").then(() => { window.location="index.php?page=data_siswa"; });</script>';
    } else {
        echo '<script language="javascript">swal("Galat!","Data gagal ditambah!","error").then(() => { window.location="index.php?page=data_siswa"; });</script>';
    }
}


// $_SESSION["sukses"] = 'Data siswa berhasil ditambah!';
// echo "<script>url:location='./index.php?page=data_siswa'</script>";
// if ($dataSiswa) {
//     echo '<script language="javascript">swal("Sukses!","Data berhasil ditambah!","success").then(() => { history.go(-2); });</script>';
// } else {
//     echo '<script language="javascript">swal("Galat!","Data gagal ditambah!","error").then(() => { history.go(-2); });</script>';
// }