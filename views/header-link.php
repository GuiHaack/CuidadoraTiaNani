<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cuidadora Tia Nani</title>
    <meta name="description" content="<?= $configuracoes['descricao'] ?>">
    <meta name="keywords" content="<?= $configuracoes['keywords'] ?>">
    <meta name="format-detection" content="telephone=no">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="https://faejconstrucoes.com.br/assets/css/lightslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

    <link rel='stylesheet' href='<?= $actual_link ?>/assets/css/style.css'>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $actual_link ?>/assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $actual_link ?>/assets/favicon_io/favicon-32x32.png">

    <!-- NAV AZULADA AO ROLAR -->
    <script>
        $(document).ready(function() {

            var checkScrollBar = function() {
                $('.fixed-top').css({
                    backgroundColor: $(this).scrollTop() > 1 ?
                        'rgb(242,90,91, 0.9)' : '#f25a5b'
                })
            }
            $(window).on('load resize scroll', checkScrollBar)
        });
        $(document).ready(function() {

            var checkScrollBar = function() {
                if ($(window).width() <= 960) {
                    $('.fixed-top').css({
                        backgroundColor: $(this).scrollTop() > 1 ?
                            'rgb(242,90,91, 0.9)' : '#f25a5b'
                    });
                    $('.fixed-top').css("z-index", "5200");
                }
            }
            $(window).on('load resize scroll', checkScrollBar)
        });
    </script>
    <!-- NAV AZULADA AO ROLAR -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top some-mobile">
        <div class="container-fluid">

            <a class="navbar-brand" href="<?= $actual_link ?>/home">
                <img src="assets/images/logo/Cuidadora-Nani-Logotipo.jpg" alt="">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ms-5 d-flex justify-content-start" id="navbarColor03">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 " id="linhaNav">
                    <li class="nav-item">
                        <a class="nav-link <?= $actual_link == '/home' ? 'active' :  '' ?>" id="home-id" aria-current="page" href="<?= $actual_link ?>/home">
                            HOME
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="sobre-btn" href="<?= $actual_link ?>/home#sobre">
                            SOBRE
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/novidades' ? 'active' :  '' ?>" id="noticia-id" href="<?= $actual_link ?>/home#novidades">
                            NOVIDADES
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/galeria' ? 'active' :  '' ?>" id="galeria-id" href="<?= $actual_link ?>/home#galeria">
                            GALERIA
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contato-id" href="<?= $actual_link ?>/home#contato">
                            CONTATO
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                </ul>

                <li style="list-style: none;" class="pe-4 some-mobile">
                    <a class="social-link" href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram size-icon "></i>
                    </a>
                </li>
                <li style="list-style: none;">
                    <a class="social-link some-mobile" href="" target="_blank">
                        <i class="fab fa-whatsapp size-icon" style="color: #ffffff !important"></i>
                    </a>
                </li>

            </div>
        </div>
    </nav>

    <!----------NAV MOBILE---------->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top some-pc">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $actual_link ?>/home" style="padding-right: 28%;">
                <img src="assets/images/logo/Cuidadora-Nani-Logotipo.jpg" id="logo-img" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" id="nav-blue" onclick="alteracor()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 " id="linhaNav">
                    <li class="nav-item">
                        <a class="nav-link <?= $actual_link == '/home' ? 'active' :  '' ?>" id="home-id-mobile" aria-current="page" href="<?= $actual_link ?>/home">
                            HOME
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" id="sobre-btn-mobile" href="<?= $actual_link ?>/home#sobre">
                            SOBRE
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/novidades' ? 'active' :  '' ?>" id="noticia-id" href="<?= $actual_link ?>/home#novidades">
                            NOVIDADES
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/galeria' ? 'active' :  '' ?>" id="galeria-id" href="<?= $actual_link ?>/home#galeria">
                            GALERIA
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contato-id" href="<?= $actual_link ?>/home#contato">
                            CONTATO
                            <div class="bar-nav-link"></div>
                        </a>
                    </li>
                </ul>

                <li style="list-style: none;" class="">
                    <a class="social-link" href="https://www.instagram.com/open_internet/" target="_blank">
                        <i class="fab fa-instagram size-icon "></i>
                    </a>
                    <a class="social-link" href="https://www.facebook.com/search/top?q=open%20internet" target="_blank">
                        <i class="fab fa-facebook-f size-icon "></i>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <script>
        function alteracor() {
            if ($(window).width() <= 960) {
                $('.fixed-top').css({
                    backgroundColor: $(this).scrollTop() > 1 ?
                        'rgb(242,90,91, 0.9)' : 'rgb(242,90,91, 0.9)'
                });
                return true;
            }
            if ($('.fixed-top').css("background-color") == "transparent") {
                $('.fixed-top').css("background-color", "rgb(242,90,91, 0.9)");
                return true;
            }
            if ($('.fixed-top').css("background-color") == "rgba(0, 0, 0, 0)") {
                $('.fixed-top').css("background-color", "rgb(242,90,91, 0.9)");
                return true;
            }
            if ($('.fixed-top').css("background-color") == "rgb(242,90,91, 0.9)") {
                $('.fixed-top').css("background-color", "rgba(0, 0, 0, 0)");
                return true;
            }
        }
    </script>

    <script>
        /*PC */
        $('#sobre-btn').on('click', function(event) {
            $(this).addClass('active');
            $("#home-id").removeClass('active');
            $("#contato-id").removeClass('active');
            $("#galeria-id").removeClass('active');
            $("#noticia-id").removeClass('active');
        });

        $('#contato-id').on('click', function(event) {
            $(this).addClass('active');
            $("#home-id").removeClass('active');
            $("#sobre-btn").removeClass('active');
            $("#noticia-id").removeClass('active');
            $("#galeria-id").removeClass('active');
        });

        $('#noticia-id').on('click', function(event) {
            $(this).addClass('active');
            $("#home-id").removeClass('active');
            $("#sobre-btn").removeClass('active');
            $("#contato-id").removeClass('active');
            $("#galeria-id").removeClass('active');
        });

        $('#galeria-id').on('click', function(event) {
            $(this).addClass('active');
            $("#home-id").removeClass('active');
            $("#sobre-btn").removeClass('active');
            $("#noticia-id").removeClass('active');
            $("#contato-id").removeClass('active');
        });

        /*MOBILE */
        $('#sobre-btn-mobile').on('click', function() {
            $(this).addClass('active');
            $("#home-id-mobile").removeClass('active');
            $("#plano-id-mobile").removeClass('active');
            $("#contato-id-mobile").removeClass('active');
        });

        $('#plano-id-mobile').on('click', function() {
            $(this).addClass('active');
            $("#home-id-mobile").removeClass('active');
            $("#sobre-btn-mobile").removeClass('active');
            $("#contato-id-mobile").removeClass('active');
        });

        $('#contato-id-mobile').on('click', function() {
            $(this).addClass('active');
            $("#home-id-mobile").removeClass('active');
            $("#sobre-btn-mobile").removeClass('active');
            $("#plano-id-mobile").removeClass('active');
        });
    </script>

    <script>
        function closeNav() {
            $("#navbarNavDropdown").removeClass('show')
        }
    </script>

    <!----------NAV MOBILE---------->