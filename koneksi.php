<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "dbgis_3183111046";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi) {
    echo "Koneksi Gagal";
} else {
    //echo "Koneksi Berhasil";
}

?>