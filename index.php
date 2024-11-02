<?php
include 'koneksi.php';

// Ambil data barang
$sql = "SELECT * FROM barang";
$result = mysqli_query($koneksi,
$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border ="1">
        <tr>
            <th>Id Barang</th>
            <th>Tanggal penjualan</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Jumlah terjual</th>
            <th>Total penjualan</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
                <td><?php echo
                 $row['IdBarang']; ?></td>
                    <td><?php echo
                     $row['Tanggalpenjualan']; ?></td>
                        <td><?php echo
                         $row['Namaproduk']; ?></td>
                            <td><?php echo 
                            $row['Harga']; ?></td>
                                <td><?php echo 
                                $row['Jumlahterjual']; ?></td>
                                    <td><?php echo 
                                    $row['Totalpenjualan']; ?></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>