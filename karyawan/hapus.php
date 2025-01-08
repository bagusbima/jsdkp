<?php

require "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
else {
    echo "ID Tidak Ditemukan";
}

$hapus = "DELETE FROM karyawan WHERE id = $id";

if (mysqli_query($conn, $hapus)) {
    header("Location:index.php");
}
else {
    echo mysqli_error($conn);
}
?>