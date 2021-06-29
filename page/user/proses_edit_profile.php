<?php

session_start();

$iduser = $_POST['iduser'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
// var_dump($tangkap_foto = $_POST['foto']);
$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    echo '<script language="javascript">swal("Perhatian!","Ekstensi tidak diperbolehkan!","warning").then(() => { window.location="index.php?page=dashboard"; });</script>';
} else {
    if ($ukuran < 1044070) {
        $ini_foto = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], './assets/gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "UPDATE user SET username = '$username', password = '$password', nama_user = '$nama_user', foto = '$ini_foto' WHERE iduser = '$iduser'");
        echo '<script language="javascript">swal("Sukses!","Berhasil diedit!","success").then(() => { window.location="logout.php"; });</script>';
    } else {
        echo '<script language="javascript">swal("Perhatian!","Ukuran file terlalu besar!","warning").then(() => { window.location="index.php?page=dashboard"; });</script>';
    }
}

// $dataNilai = mysqli_query($koneksi, "UPDATE nilai SET nis = '$nis', nip = '$nip', kd_mapel = '$kd_mapel', uts = '$uts', uas = '$uas', tugas = '$tugas', absen = '$absen', predikat = '$predikat' WHERE id_nilai = '$id_nilai'");
// if ($dataNilai) {
//     echo '<script language="javascript">swal("Sukses!","Data berhasil diedit!","success").then(() => { history.go(-2); });</script>';
// } else {
//     echo '<script language="javascript">swal("Galat!","Data gagal diedit!","error").then(() => { history.go(-2); });</script>';
// }




// $_SESSION["sukses"] = 'Data siswa berhasil diedit!';
// header('Location: ./index.php');
