<?php

require "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_karyawan'];
    $idk = $_POST['id_karyawan'];
    $project = $_POST['nama_project'];
    $role = $_POST['role_karyawan'];
    $kontak = $_POST['kontak_karyawan'];

    $tambah = "INSERT INTO karyawan (nama_karyawan, id_karyawan, nama_project, role_karyawan, kontak_karyawan)
                            VALUES  ('$nama', '$idk', '$project', '$role', '$kontak')";

    if (mysqli_query($conn, $tambah)) {
        header("Location:index.php");
    }
    else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>
    <form action="" method="post">
        <label for="nama_karyawan">Nama Karyawan : </label>
        <input type="text" name="nama_karyawan" id="nama_karyawan" required><br>
        <label for="id_karyawan">ID Karyawan : </label>
        <input type="text" name="id_karyawan" id="id_karyawan" required><br>
        <label for="nama_project">Project Handlingn : </label>
        <input type="text" name="nama_project" id="nama_project" required><br>
        <label for="role_karyawan">Role Karyawan : </label>
        <input type="text" name="role_karyawan" id="role_karyawan" required><br>
        <label for="kontak_karayawan">Kontak Karyawan : </label>
        <input type="text" name="kontak_karayawan" id="kontak_karyawan" required><br>
        <input type="submit" value="Tambah Data Karyawan">
    </form>
</body>
</html>