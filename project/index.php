<?php 
include 'koneksi.php';

$data_proyek = mysqli_query($conn, "select * from project");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "delete from project where id=$id");
    header('location:index.php');
}
?>

<!DOCTYPE html>
<head>
    <title>Tampilan Project</title>
</head>

<body>
    <h1>Project</h1>
    <a href = "tambah.php">Tambah Project</a>
    <br>
    <table border = "1px">
        <thead>
            <th>No</th>
            <th>Nama Project</th>
            <th>Nama Client</th>
            <th>Deskripsi Project</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Status Project</th>
            <th>Detail Pembayaran</th>
            <th>Detail Member</th>
            <th>UPDATE/DELETE</th>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($data_proyek as $data) { ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $data['name_project'] ?></td>
                    <td><?= $data['nama_client'] ?></td>
                    <td><?= $data['deskripsi_project'] ?></td>
                    <td><?= $data['tanggal_mulai'] ?></td>
                    <td><?= $data['tanggal_selesai'] ?></td>
                    <td><?= $data['status_project'] ?></td>
                    <td> <?php if (!empty($data['detail_pembayaran'])): ?>  
                            <img src="data:image/jpeg;base64,<?= base64_encode($data['detail_pembayaran']) ?>" width="100" height="100"/>  
                        <?php else: ?>  
                            Tidak ada gambar  
                        <?php endif; ?>  </td>
                    <td><?= $data['detail_team'] ?></td>
                    <td><a href= "update.php?id=<?= $data['id']?> ">Update</a>
                    <a> or</a>
                    <a href="index.php?id=<?= $data['id'] ?>">Hapus</a>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>