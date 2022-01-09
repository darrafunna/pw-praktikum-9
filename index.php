<!-- Referensi belajar saya: 
Channel Youtube Web Programming UNPAS playlist "Belajar PHP untuk PEMULA" -->

<?php

require "functions.php";
$karyawan = query("SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Karyawan</h1>
    <a id="buttonTambah" href="tambah.php">Tambah data karyawan</a>
    <br><br>
    <table border="1" cellpadding="20" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($karyawan as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["address"]; ?></td>
                <td><?= $row["gender"]; ?></td>
                <td><?= $row["position"]; ?></td>
                <td><?= $row["status"]; ?></td>
                <td>
                    <a id="buttonHapus" href="hapus.php?id=<?= $row["id"]; ?>">HAPUS</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>