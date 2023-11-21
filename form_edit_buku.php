<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/API-Library/api_edit_buku.php?id=" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Trebuchet MS', serif;
        }

        [data-bs-theme="light"] {
            --bs-body-bg: #e8e8e8;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg p-5 mt-3 rounded bg-dark"></nav>
        <a href="daftar_buku.php" class="btn btn-dark mt-3">Back</a>
    </div>
        <div class="container">
            <div class="card mt-5 shadow-lg">
                <div class="card-header bg-dark"></div>
                <div class="card-body">
                        <form action="proses_edit.php" method="POST" class="form">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" name="judul" placeholder="judul" class="form-control" value="<?= $data['judul']; ?>">
                            </div>  
                            <div class="mb-3">
                                <label class="form-label">Penerbit</label>
                                <input type="text" name="penerbit" placeholder="Penerbit" class="form-control" value="<?= $data['penerbit']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Penulis</label>
                                <input type="text" name="penulis" placeholder="Penulis" class="form-control" value="<?= $data['penulis']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun</label>
                                <input type="text" name="tahun" placeholder="Tahun" class="form-control" value="<?= $data['tahun']; ?>">
                            </div>
                            <div class="d-flex justify-content-end">
                                <!-- <input type="submit" value="Save" name="ubah" class="btn btn-outline-dark"> -->
                                <button type="submit" class="btn btn-outline-dark">Save</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
</body>

</html>