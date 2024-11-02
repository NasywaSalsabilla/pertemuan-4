<?php
include 'koneksi.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id_Barang = $_POST['Id_Barang'];
    $Tanggal_penjualan = $_POST['Tanggal_penjualan'];
    $Nama_produk = $_POST['Nama_produk'];
    $Harga = $_POST['Harga'];
    $Jumlah_terjual = $_POST['Jumlah_terjual'];
    $Total_penjualan = $_POST['Total_penjualan'];

    $sql = "INSERT INTO barang (Id_Barang, Tanggal_penjualan, Nama_produk, Harga, jumlah_terjual, Total_penjumlahan')
    VALUES ('$Id_Barang, $Tanggal_penjualan, $Nama_produk, $Harga, $Jumlah_terjual, $Total_penjualan')";

    if (mysqli_query($koneksi,$sql)) {
        echo "Data berhasil di tambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Barang</title>
    </head>
    <body>
        <h1>Tambah Barang</h1>
        <form method="POST" action="">
            <label>Id_Barang:</label>
            <input type="text" name="Id_barang" required>
            <br>
            <label>Tanggal_Penjualan:</label>
            <input type="text" name="Tanggal_penjualan" required>
            <br>
            <label>Nama_Produk:</label>
            <input type="text" name="Nama_produk" required>
            <br>
            <label>Harga:</label>
            <input type="text" name="Harga" required>
            <br>
            <label>Jumlah_terjual:</label>
            <input type="text" name="Jumlah_terjual" required>
            <br>
            <label>Total_penjualan:</label>
            <input type="text" name="Total_penjualan" required> 
            <br>
            <input type="submit"
            value="tambah">
</form>    
    </body>
    </html>
