<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $configuracoes['nome'] ?></title>
    <meta name="description" content="<?= $configuracoes['descricao'] ?>">
    <meta name="keywords" content="<?= $configuracoes['keywords'] ?>">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FONTS -->
    <script src="https://kit.fontawesome.com/639d088888.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Mulish:wght@300;400;600;800&display=swap" rel="stylesheet"> <!-- CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <link type="text/css" rel="stylesheet" href="<?= $actual_link ?>/assets/css/lightslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $actual_link ?>/assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $actual_link ?>/assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $actual_link ?>/assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="<?= $actual_link ?>/assets/favicon_io/site.webmanifest">

    <style>
        html,
        body {
            height: 100%;
            background-color: #f25a5b;
            color: #fff;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        p {
            color: #fff;
        }
    </style>

</head>

<body class="container-fluid">
    <div class="cover-container d-flex justify-content-center align-items-center w-100 h-100">
        <main role="main" class="inner cover">
            <h1 class="cover-heading">Site em Desenvolvimento</h1>
            <p class="lead">Em desenvolvimento por Guilherme G. Haack.</p>
            <img src="./assets/images/logo/Cuidadora-Nani-Logotipo.jpg" class="img-thumbnail mx-auto d-block" alt="...">
        </main>
    </div>
</body>