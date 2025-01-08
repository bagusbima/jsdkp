<?php

require "../koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
else {
    echo "ID Tidak Ditemukan";
}

$result = mysqli_query($conn, "SELECT * FROM karyawan WHERE id = $id");
$karyawan = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_karyawan'];
    $idk = $_POST['id_karyawan'];
    $project = $_POST['nama_project'];
    $role = $_POST['role_karyawan'];
    $kontak = $_POST['kontak_karyawan'];

    $ubah = "UPDATE karyawan SET nama_karyawan = '$nama',
                                 id_karyawan = '$idk',
                                 nama_project = '$project',
                                 role_karyawan = '$role',
                                 kontak_karyawan = '$kontak'
                                 WHERE id = $id";

    if (mysqli_query($conn, $ubah)) {
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
    <title>Ubah Data Karyawan</title>
</head>
<body>
    <h1>Ubah Data Karyawan</h1>
    <form action="" method="post">
        <label for="nama_karyawan">Nama Karyawan : </label>
        <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?= $karyawan['nama_karyawan']?>"><br>
        <label for="id_karyawan">ID Karyawan : </label>
        <input type="text" name="id_karyawan" id="id_karyawan" value="<?= $karyawan['id_karyawan']?>"><br>
        <label for="nama_project">Project Handling : </label>
        <input type="text" name="nama_project" id="nama_project" value="<?= $karyawan['nama_project']?>"><br>
        <label for="role_karyawan">Role Karyawan : </label>
        <input type="text" name="role_karyawan" id="role_karyawan" value="<?= $karyawan['role_karyawan']?>"><br>
        <label for="kontak_karyawan">Kontak Karyawan : </label>
        <input type="text" name="kontak_karyawan" id="kontak_karyawan" value="<?= $karyawan['kontak_karyawan']?>"><br>
        <input type="submit" value="Ubah Data Karyawan">
    </form>
</body>
</html>