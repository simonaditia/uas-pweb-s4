<?php

require_once __DIR__ . '/../../assets/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->showImageErrors = true;
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .judul {
            text-align: center;
        }
        .sd {
            font-size: 30px;
        }
        .ini-table  th{
            background-color: #242526;
            color: white;
        }
        .text-red {
            color: red;
        }
        .text-black {
            color: black;
        }
    </style>
</head>
<body>
    <div class="judul">
        <img src="./assets/gambar/S.png" width="30" />
        <b class="sd"><span class="text-red">SD</span><span class="text-black"> Jaya Bekasi</span></b>
    </div><br>
    <h3>Data Nilai</h3>
    <table border="1" cellpadding="10" cellspacing="0" class="ini-table">
        <tr>
            <th>Nis</th>
            <th>Nama Siswa</th>
            <th>Nip</th>
            <th>Nama Guru</th>
            <th>Kode Mapel</th>
            <th>Nama Mapel</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Absen</th>
            <th>Nilai Rata-rata</th>
            <th>Predikat</th>
        </tr>';
$idNilai = $_GET['id_nilai'];
$dataNilai = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_nilai = '$idNilai'");
while ($dn = mysqli_fetch_array($dataNilai)) {
    $tampilSiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$dn[nis]'");
    $ts = mysqli_fetch_array($tampilSiswa);
    $tampilGuru = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$dn[nip]'");
    $tg = mysqli_fetch_array($tampilGuru);
    $tampilMapel = mysqli_query($koneksi, "SELECT * FROM mapel WHERE kd_mapel='$dn[kd_mapel]'");
    $tm = mysqli_fetch_array($tampilMapel);
    $rata2 = ($dn['uts'] * 0.3) + ($dn['uas'] * 0.4) + ($dn['tugas'] * 0.2) + ($dn['absen'] * 0.1) / 4;
    $html .= '<tr>
                <td>' . $dn['nis'] . '</td>
                <td>' . $ts['nama'] . '</td>
                <td>' . $dn['nip'] . '</td>
                <td>' . $tg['nama_guru'] . '</td>
                <td>' . $dn['kd_mapel'] . '</td>
                <td>' . $tm['nama_mapel'] . '</td>
                <td>' . $dn['uts'] . '</td>
                <td>' . $dn['uas'] . '</td>
                <td>' . $dn['tugas'] . '</td>
                <td>' . $dn['absen'] . '</td>
                <td>' . $rata2 . '</td>
                <td>' . $dn['predikat'] . '</td>
            </tr>';
}
$html .= '</table>
</body>
</html>
';
$mpdf->WriteHTML($html);
ob_clean();
$mpdf->Output('data-nilai.pdf', \Mpdf\Output\Destination::INLINE);
