<?php
$host = 'localhost';
$username= 'root'; // Laragon.MySQL\penjualan\barang\
$password = ""; 
$database = "penjualan";

$koneksi = mysqli_connect($host,
$username, $password,
$database);

// Cek koneksi
if (!$koneksi) {
    die("koneksi gagal: " .
    mysqli_connect_error());
}
?>