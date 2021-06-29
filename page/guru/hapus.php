<?php

session_start();

$nip = $_GET['nip'];
mysqli_query($koneksi, "DELETE FROM guru WHERE nip = '$nip'");
echo "<script>url:location='./index.php?page=data_guru'</script>";
