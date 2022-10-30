<?php

// Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$db_name = "pemesanan";

$db = mysqli_connect($server, $username, $password, $db_name);

if (!$db){
    die("Gagal terhubung");
}

?>