<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM project WHERE id = $id");
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_project = $_POST['name_project'];
    $nama_client = $_POST['nama_client'];
    $deskripsi_project = $_POST['deskripsi_project'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $status_project = $_POST['status_project'];
    $detail_pembayaran = $_POST['detail_pembayaran'];
    $detail_team = $_POST['detail_team'];
    

    $sql = "UPDATE project SET   
    name_project = '$name_project',   
    nama_client = '$nama_client',   
    deskripsi_project = '$deskripsi_project',   
    tanggal_mulai = '$tanggal_mulai',   
    tanggal_selesai = '$tanggal_selesai',   
    status_project = '$status_project',   
    detail_pembayaran = '$detail_pembayaran',   
    detail_team = '$detail_team'   
    WHERE id = $id";  

    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="post" action="">
    Nama Project    : <input type="text" name="name_project" value="<?= $user['name_project']?>" required><br>
    Nama Client     : <input type="text" name="nama_client" value="<?= $user['nama_client']?>" required><br>
    Detail Project  : <input type="text" name="deskripsi_project" value="<?= $user['deskripsi_project']?>" required ><br>
    Tanggal Mulai   : <input type="date" name="tanggal_mulai" value="<?= $user['tanggal_mulai']?>" required><br>
    Tanggal Selesai : <input type="date" name="tanggal_selesai" value="<?= $user['tanggal_selesai']?>" required><br>
    Status Project  : <input type="text" name="status_project" value="<?= $user['status_project']?>" required><br>
    Detail Pembayaran : <input type="file" name="detail_pembayaran" value="<?= $user['detail_pembayaran']?>"><br>
    Detail Team     : <input type="text" name="detail_team" value="<?= $user['detail_team']?>"><br>   
    <input type="submit" value="Submit">
</form>