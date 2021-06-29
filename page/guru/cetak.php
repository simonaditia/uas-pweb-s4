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
    <h3>Data Guru</h3>
    <table border="1" cellpadding="10" cellspacing="0" class="ini-table">
        <tr>
            <th>Nip</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>No.HP</th>
        </tr>';
$nip = $_GET['nip'];
$dataa = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip = '$nip'");
while ($d = mysqli_fetch_array($dataa)) {
    if ($d['jk'] == "L") {
        $d['jk'] = "Laki-laki";
    } else {
        $d['jk'] = "Perempuan";
    }
    $html .= '<tr>
                <td>' . $d['nip'] . '</td>
                <td>' . $d['nama_guru'] . '</td>
                <td>' . $d['jk'] . '</td>
                <td>' . $d['hp'] . '</td>
            </tr>';
}
$html .= '</table>
</body>
</html>
';
$mpdf->WriteHTML($html);
ob_clean();
$mpdf->Output('data-guru.pdf', \Mpdf\Output\Destination::INLINE);
