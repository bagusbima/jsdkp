<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_tugas = $_POST['nama_tugas'];
    $dihandle = $_POST['dihandle'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO tugas (nama_tugas, dihandle, status, deadline) VALUES ('$nama_tugas', '$dihandle', '$status', '$deadline')";

    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<form method="post" action="">
    Nama tugas: <input type="text" name="nama_tugas" required><br>
    Dihandle oleh: <input type="text" name="dihandle" required><br>
    Status: <input type="text" name="status" required><br>
    Deadline: <input type="text" name="deadline" required><br>
    <input type="submit" value="Submit">
</form>