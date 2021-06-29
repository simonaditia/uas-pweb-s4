<?php
//bisa juga ini
// $host = mysqli_connect("localhost", "root", "", "db_sekolah");

// if(mysqli_connect_errno()) {
//     echo "Koneksi Gagal!";
// } else {
//     echo "";
// }


$host = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$koneksi = mysqli_connect($host, $username, $password, $database) or die("Database tidak bisa dibuka");
