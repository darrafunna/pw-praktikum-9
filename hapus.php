<?php

require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data karyawan berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data karyawan gagal dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
}
