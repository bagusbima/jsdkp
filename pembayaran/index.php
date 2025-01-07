<?php
require '../koneksi.php';

$pembayaran_client = mysqli_query($conn, "SELECT * FROM pembayaran")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
    <h1>Catatan Pembayaran</h1>
    <a href="tambah.php">Tambah Catatan Pembayaran</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Projek</th>
            <th>Client Projek</th>
            <th>Total Pembayaran</th>
            <th>Status Pembayaran</th>
            <th>Tanggal Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($pembayaran_client as $bayar) { ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $bayar['nama_projek'];?></td>
                <td><?= $bayar['nama_client'];?></td>
                <td><?= $bayar['total_pembayaran'];?></td>
                <td><?= $bayar['status_pembayaran'];?></td>
                <td><?= $bayar['tanggal_pembayaran'];?></td>
                <td><?= $bayar['bukti_pembayaran'];?></td>
                <td><a href="ubah.php?id=<?= $bayar['id'];?>">Ubah</a> | <a href="hapus.php?id=<?= $bayar['id'];?>">Hapus</a></td>
            </tr>
        <?php };?>
        </tbody>
    </table>
</body>
</html>