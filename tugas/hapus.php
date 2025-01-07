<?php 
require '../koneksi.php';

if (isset($_GET['id_tugas'])) {
    $id = $_GET['id_tugas'];
}

mysqli_query($conn, "DELETE FROM sisman where id=$id");
header('location:tugas.php');
?>