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
            font-family: 'Lexend', sans-serif;
        }

        [data-bs-theme="light"] {
            --bs-body-bg: #e8e8e8;
        }

        .form-area {
            padding-top: 7%;
        }

        .row.single-form {
            box-shadow: 0 2px 20px -5px rgba(0, 0, 0, 0.5);
        }

        .left {
            padding: 200px 100px;
        }

        .left h2 {
            font-weight: 600;
            font-size: 50px;
        }

        .left h2 span {
            font-weight: 100;
        }

        .single-form {
            background: #fff;
        }

        .right {
            padding: 11rem 100px;
            position: relative;
        }

        /*responsive*/

        @media (max-width:767px) {
            .left {
                padding: 90px 15px;
                text-align: center;
            }

            .left h2 {
                font-size: 25px;
            }

            .right {
                padding: 25px;
            }
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="form-area">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left bg-dark text-bg-dark">
                        <h2 class="absolute"><span>Library</span> <br>App</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                        <div class="mb-2">
                            <p class="lead">Selamat datang kembali! Silakan masuk untuk melanjutkan eksplorasi di dunia pengetahuan kami</p>
                            <a href="daftar_buku.php" class="btn btn-dark btn-lg">Daftar Buku</a>
                            <a href="daftar_pinjaman.php" class="btn btn-outline-dark btn-lg">Daftar Pinjaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>