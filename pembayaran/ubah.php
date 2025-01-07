<?php

require "../koneksi.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    }
else {
    die("Tidak mendapatkan ID");
}

$result= mysqli_query($conn, "SELECT * FROM pembayaran WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama_projek = $_POST['nama_projek'];
    $nama_client = $_POST['nama_client'];
    $total_pembayaran = $_POST['total_pembayaran'];
    $status_pembayaran = $_POST['status_pembayaran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $bukti_pembayaran = $_POST['bukti_pembayaran'];
    
    $ubah = "UPDATE pembayaran SET nama_projek='$nama_projek',
                                    nama_client='$nama_client',
                                    total_pembayaran='$total_pembayaran',
                                    status_pembayaran='$status_pembayaran',
                                    tanggal_pembayaran='$tanggal_pembayaran',
                                    bukti_pembayaran='$bukti_pembayaran'
                                    WHERE id = $id";
    if(mysqli_query($conn, $ubah)){
        header('Location:index.php');
    }
    else {
        echo "Error : ". $sql . "<br>" .mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama_projek" >Nama Projek : </label>
        <input type="text" name="nama_projek" value="<?= $data['nama_projek']?>"><br>
        <label for="nama_client">Nama Client : </label>
        <input type="text" name="nama_client" value="<?= $data['nama_client']?>"><br>
        <label for="total_pembayaran">Total Pembayaran : </label>
        <input type="text" name="total_pembayaran"  value="<?= $data['total_pembayaran']?>"><br>
        <label for="status_pembayaran">Status Pembayaran : </label>
        <input type="text" name="status_pembayaran" value="<?= $data['status_pembayaran']?>"><br>
        <label for="tanggal_pembayaran">Tanggal Pembayaran : </label>
        <input type="text" name="tanggal_pembayaran" value="<?= $data['tanggal_pembayaran']?>"><br>
        <label for="bukti_pembayaran">Bukti Pembayaran : </label>
        <input type="text" name="bukti_pembayaran" value="<?= $data['bukti_pembayaran']?>"><br>
        <input type="submit" value="Simpan Perubahan Data">
    </form>
    <a href="index.php">Batal / Kembali</a>
</body>
</html>