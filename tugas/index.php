<?php 

require '../koneksi.php';

$data_tugas = mysqli_query($conn, "SELECT * FROM sisman");

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     mysqli_query($conn, "DELETE FROM sisman WHERE id_tugas = $id");
//     header('location:index.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
    <style>
        body{
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .barisgenap{
            background-color: rgba(3, 98, 76, 0.1);
        }
        table{
            width: 100%;
            text-align: center;
        }
        .headtable{
            background-color: #03624C;
            color: #F1F7F6;
        }
        .tambah-teks{
            margin: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Tugas</h1>
    <table cellpadding="10" cellspacing="0">
        <thead class="headtable">
            <th>Nomor</th>
            <th>Nama tugas</th>
            <th>Dihandle oleh</th>
            <th>Status</th>
            <th>Deadline</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($data_tugas as $data) { ?>
                <tr
                <?php if($nomor % 2 == 0):?>
                    class="barisgenap";
                <?php endif?>
                >
                    <td><?= $nomor++ ?></td>
                    <td><?= $data['nama_tugas'] ?></td>
                    <td><?= $data['dihandle'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['deadline'] ?></td>
                    <td><a href="ubah.php?id=<?= $data['id_tugas']?>">Ubah data</a> | <a href="hapus.php?id=<?= $data['id_tugas'] ?>">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="tambah.php">Tambah data</a>

</body>
</html>