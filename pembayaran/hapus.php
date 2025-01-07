<?php

require "../koneksi.php";

if (!isset($_GET["id"])) {
    die("ID tidak ditemukan.");
}
$id = $_GET["id"];

$hapus = mysqli_query($conn, "DELETE FROM pembayaran WHERE id = $id");

header('location:index.php');

?>