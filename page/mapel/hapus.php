<?php

session_start();

$kd_mapel = $_GET['kd_mapel'];
mysqli_query($koneksi, "DELETE FROM mapel WHERE kd_mapel = '$kd_mapel'");
echo "<script>url:location='./index.php?page=data_mapel'</script>";
