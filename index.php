<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <link href="asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="asset/css/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/css/icomoon.css" rel="stylesheet">
    <link href="asset/css/main.css" rel="stylesheet">
    <link href="asset/css/responsive.css" rel="stylesheet">
    <style>
        body {
            color: black;
            font-family: Comic Sans MS;
            }
    </style>
</head>
<body>
<div class="container">
    <p></p>
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Perusahaan BAYRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homeKaryawan">Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=homeDivisi">Divisi</a>
                </li>
            </ul>

            <div class="social">
                <ul class="social-share">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                </ul>
            </div>

            
            <div class="col-sm-6 col-xs-20">
                <div class="top-number">
                    <p><i class="fa fa-phone-square"></i>Hubungi 0853 0000 0000</p>
                </div>
            </div>

        </div>
    </nav>

    <?php
    $page = $_GET['page'] ?? '';
    $halaman = 'View/home.php';
    switch ($page){
        //Dosen
        case 'homeDivisi';
            $halaman = 'View/divisi/home.php';
            break;
        case 'registerDivisi';
            $halaman = 'View/divisi/formTambah.php';
            break;
        case 'editDivisi';
            $halaman = 'View/divisi/formUbah.php';
            break;
        case 'deleteDivisi';
            $halaman = 'View/divisi/konfirmasiHapus.php';
            break;
        
        //KAryawab
        case 'homeKaryawan';
            $halaman = 'View/karyawan/home.php';
            break;
        case 'registerKaryawan';
            $halaman = 'View/karyawan/formTambah.php';
            break;
        case 'editKaryawan';
            $halaman = 'View/karyawan/formUbah.php';
            break;
        case 'deleteKaryawan';
            $halaman = 'View/karyawan/konfirmasiHapus.php';
            break;
    }
    include($halaman);
    ?>


</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
 </body>
 </html>