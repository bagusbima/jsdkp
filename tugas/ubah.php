<?php 
require '../koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM sisman WHERE id_tugas = $id");
$data = mysqli_fetch_assoc($result);

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $nama_tugas = $_POST['nama_tugas'];
    $dihandle = $_POST['dihandle'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];

    $ubah = "UPDATE sisman SET nama_tugas = '$nama_tugas',
                                dihandle = '$dihandle',
                                status = '$status',
                                deadline = '$deadline'
                                WHERE id_tugas = $id";
    if( mysqli_query($conn, $ubah) ) {
        header('location:tugas.php');
    } else {
        echo "error:". $sql . "<br>" .mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama_tugas">Nama tugas: </label>
        <input type="text" name="nama_tugas" id="nama_tugas" value="<?= $data['nama_tugas']?>"><br>
        <label for="dihandle">Dihandle: </label>
        <input type="text" name="dihandle" id="dihandle" value="<?= $data['dihandle']?>"><br>
        <label for="status">Status: </label>
        <input type="text" name="status" id="status" value="<?= $data['status']?>"><br>
        <label for="deadline">Deadline: </label>
        <input type="text" name="deadline" id="deadline" value="<?= $data['deadline']?>"><br>
        <input type="submit" value="Simpan peubahan">
    </form>
</body>
</html>