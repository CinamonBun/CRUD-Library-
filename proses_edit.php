<?php
require_once('config.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    // $query = "UPDATE tb_buku SET judul='$judul', penerbit='$penerbit', penulis='$penulis', tahun='$tahun' WHERE id='$_GET[edit]'";
    // $sql = mysqli_query($conn, $query);

    $sql = $conn->prepare("UPDATE tb_buku SET judul=?, penerbit=?, penulis=?, tahun=? WHERE id=?");
    $sql->bind_param('sssdd', $judul, $penerbit, $penulis, $tahun, $id);
    $sql->execute();

    if ($sql) {
        echo 'Data Berhasil diUbah!';
        header("Location: daftar_buku.php");
    } else {
        echo 'Data Gagal diUbah!';
        header("Location: daftar_buku.php");
    }
} else {
    echo "GAGAL";
}