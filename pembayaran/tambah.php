<?php

require "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_projek = $_POST['nama_projek'];
    $nama_client = $_POST['nama_client'];
    $total_pembayaran = $_POST['total_pembayaran'];
    $status_pembayaran = $_POST['status_pembayaran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $bukti_pembayaran = $_POST['bukti_pembayaran'];

    $query = "INSERT INTO pembayaran (nama_projek, nama_client, total_pembayaran, status_pembayaran, tanggal_pembayaran, bukti_pembayaran) 
            VALUES ('$nama_projek','$nama_client','$total_pembayaran','$status_pembayaran','$tanggal_pembayaran','$bukti_pembayaran')";

    if (mysqli_query($conn, $query)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembayaran</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama_projek">Nama Projek : </label>
        <input type="text" name="nama_projek" id="nama_projek" required><br>
        <label for="nama_client">Nama Client : </label>
        <input type="text" name="nama_client" id="nama_client" required><br>
        <label for="total_pembayaran">Total Pembayaran : </label>
        <input type="text" name="total_pembayaran" id="total_pembayaran" required><br>
        <label for="status_pembayaran">Status Pembayaran : </label>
        <input type="text" name="status_pembayaran" id="status_pembayaran" required><br>
        <label for="tanggal_pembayaran">Tanggal Pembayaran : </label>
        <input type="date" name="tanggal_pembayaran" id="tanggal_pembayaran"><br>
        <label for="bukti_pembayaran">Bukti Pembayaran : </label>
        <input type="text" name="bukti_pembayaran" id="bukti_pembayaran"><br>
        <input type="submit" value="Tambah Data">
    </form>
</body>
</html>