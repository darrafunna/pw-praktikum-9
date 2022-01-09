<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data karyawan berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data karyawan gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

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
    <title>Tambah Data Karyawan</title>
</head>

<body class="bodyTambah">
    <div class="tambahData">

        <h1>Tambah Data Karyawan</h1>
        <div class="inputData">

            <form action="" method="post">
                <ul>
                    <li>
                        <label for="name">Nama</label> <br>
                        <input type="text" name="name" id="name" required>
                    </li>
                    <li>
                        <br>
                        <label for="email">Email</label> <br>
                        <input type="email" name="email" id="email" required>
                    </li>
                    <li>
                        <br>
                        <label for="address">Address</label> <br>
                        <input type="text" name="address" id="address" required>
                    </li>
                    <li>
                        <br>
                        <label for="gender">Gender</label> <br>
                        <select name="gender" id="gender" required>
                            <option value="">--Pilih Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </li>
                    <li>
                        <br>
                        <label for="position">Position</label> <br>
                        <input type="text" name="position" id="position" required>
                    </li>
                    <li>
                        <br>
                        <label for="status">Status</label> <br>
                        <select name="status" id="status" required>
                            <option value="">--Pilih Status--</option>
                            <option value="Parttime">Parttime</option>
                            <option value="Fulltime">Fulltime</option>
                        </select>
                    </li>
                    <li>
                        <br>
                        <button id="buttonTambah2" type="submit" name="submit">Tambah Data</button> <br> <br>
                    </li>
                </ul>
            </form>
        </div>
    </div>

</body>

</html>