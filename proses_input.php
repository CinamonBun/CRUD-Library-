<?php

include("config.php");

if (isset($_POST['input'])) {
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    $query = "INSERT INTO tb_buku VALUE ('', '$judul', '$penerbit', '$penulis', '$tahun')";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo 'Data Berhasil diTambah!';
    } else {
        echo 'Data Gagal diTambah!';
    }
    header("Location: daftar_buku.php");
    exit();
}
