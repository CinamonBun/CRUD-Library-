<?php

$server = "localhost";
$username = "root";
$password = "";
$database_name = "library";
$conn = mysqli_connect($server, $username, $password, $database_name);

if (!$conn) {
    die("gagal terhubung dengan database:" . mysqli_connect_error());
}
