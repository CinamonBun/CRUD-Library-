<?php

include("config.php");

if (isset($_GET['hapus'])) {
    $query = "DELETE FROM tb_pinjaman WHERE id='$_GET[hapus]'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo 'Data Berhasil diHapus!';
    } else {
        echo 'Data Gagal diHapus!';
    }
    header("Location: daftar_pinjaman.php");
    exit();
}
