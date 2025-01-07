<?php 
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
echo $id;
mysqli_query($conn, "DELETE FROM tugas where id_tugas=$id");
header('location:index.php');
?>