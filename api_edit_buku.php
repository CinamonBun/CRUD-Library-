<?php

include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $SQL = $conn->prepare("SELECT * FROM tb_buku WHERE id=?");
    $SQL->bind_param("i", $id);
    $SQL->execute();
    $hasil = $SQL->get_result();
    $myArray = array();
    while ($users = $hasil->fetch_array(MYSQLI_ASSOC)) {
        $myArray = $users;
    }
    echo json_encode($myArray);
} else {
    echo "data tidak ditemukan";
}
