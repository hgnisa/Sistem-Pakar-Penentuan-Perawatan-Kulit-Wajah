<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik Dr. Ika | Sistem Pakar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="source/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="source/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="source/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> (+62)823-1629-4442</li>
                            <li><i class="fa fa-map-marker"></i> Klinik Dr.Ika, Pekanbaru</li>
                            <li><i class="fa fa-clock-o"></i> Selasa - Minggu | 10:00 to 18:00 WIB</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="https://www.facebook.com/Ikapuspaningtyas.klinik"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <a href="https://instagram.com/klinik_dr.ika"><i class="fa fa-instagram"></i></a>
                            <!-- <a href="#"><i class="fa fa-dribbble"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="../index.php"><img src="source/img/logoKlinik2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <?php
                                    $activePage = basename($_SERVER['PHP_SELF'], ".php");
                                ?>

                                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="../index.php">Beranda</a></li>
                                <li class="<?= ($activePage == 'tentang') ? 'active':''; ?>"><a href="tentang.php">Tentang</a></li>
                                <li class="<?= ($activePage == 'kontak') ? 'active':''; ?>"><a href="kontak.php">Kontak</a></li>
                            </ul>

                        </nav>
                        <div class="header__btn">
                            <a href="../formKonsultasi.php" class="primary-btn">Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->