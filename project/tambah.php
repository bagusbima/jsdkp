<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_project = $_POST['name_project'];
    $nama_client = $_POST['nama_client'];
    $deskripsi_project = $_POST['deskripsi_project'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $status_project = $_POST['status_project'];
    $detail_pembayaran = $_POST['detail_pembayaran'];
    $detail_team = $_POST['detail_team'];
    

    $sql = "INSERT INTO project (name_project, nama_client, deskripsi_project, tanggal_mulai, tanggal_selesai, status_project, detail_pembayaran, detail_team) 
    VALUES ('$name_project', '$nama_client', '$deskripsi_project', '$tanggal_mulai', '$tanggal_selesai', '$status_project', '$detail_pembayaran', '$detail_team')";

    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<form method="post" action="">
    Nama Project    : <input type="text" name="name_project" required><br>
    Nama Client     : <input type="text" name="nama_client" required><br>
    Detail Project  : <input type="text" name="deskripsi_project" required><br>
    Tanggal Mulai   : <input type="date" name="tanggal_mulai" required><br>
    Tanggal Selesai : <input type="date" name="tanggal_selesai" required><br>
    Status Project  : <input type="text" name="status_project" required><br>
    Detail Pembayaran : <input type="file" name="detail_pembayaran"><br>
    Detail Team     : <input type="text" name="detail_team"><br>   
    <input type="submit" value="Submit">
</form>