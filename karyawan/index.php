<?php

require "../koneksi.php";

$karyawan = mysqli_query($conn, "SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>
    <a href="tambah.php">Tambah Data Karyawan</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>ID Karyawan</th>
            <th>Project Handling</th>
            <th>Role Karyawan</th>
            <th>Kontak Karyawan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ( $karyawan as $kyn ) : ?>
                <tr>
                    <td><?= $no++;?></td>
                    <td><?= $kyn['nama_karyawan'];?></td>
                    <td><?= $kyn['id_karyawan'];?></td>
                    <td><?= $kyn['nama_project'];?></td>
                    <td><?= $kyn['role_karyawan'];?></td>
                    <td><?= $kyn['kontak_karyawan'];?></td>
                    <td><a href="ubah.php?id=<?= $kyn['id']?>">Ubah</a> | <a href="hapus.php?id=<?= $kyn['id']?>">Hapus</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>