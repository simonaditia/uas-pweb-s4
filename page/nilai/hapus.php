<?php

session_start();

$id_nilai = $_GET['id_nilai'];
mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai = '$id_nilai'");
echo "<script>url:location='./index.php?page=data_nilai'</script>";
