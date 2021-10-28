<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Administrativo Nani</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
  </script>

  <link rel="apple-touch-icon" sizes="180x180" href="<?= $actual_link ?>/assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $actual_link ?>/assets/favicon_io/favicon-32x32.png">

  <link rel="stylesheet" href="<?= $actual_link ?>/painel/dist/css/custom.css">

  <!-- adminlte-->
  <link rel="stylesheet" href="<?= $actual_link ?>/painel/dist/css/adminlte.min.css">
  <script src="<?= $actual_link ?>/painel/plugins/ckeditor/ckeditor.js"></script>

</head>

<body class="hold-transition sidebar-mini pace-primary">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="padding-left: 1%;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= $actual_link ?>/" target="_blank" class="nav-link"><i class="fas fa-home"></i> Ver
            site</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= $actual_link ?>/painel/sair" class="nav-link"><i class="fas fa-sign-out-alt"></i>
            Sair</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-secundary elevation-4">
      <!-- Brand Logo -->

      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark largura-nav" style="background-color: #f25a5b !important;">
        <div style="width: 100%;">
          <img src="<?= $actual_link ?>/assets/images/logo/Cuidadora-Nani-Logotipo.jpg" class="img-fluid">
        </div>
        <a href="/painel/home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-5">Painel Administrativo</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="/painel/home" class="nav-link <?= $_SERVER['REQUEST_URI'] === '/painel/home' || $_SERVER['REQUEST_URI'] === '/painel/' ? 'active' : '' ?>" aria-current="page">
              <i class="far fa-home fa-lg me-2" width="24" height="24"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $actual_link ?>/painel/listar-galeria" class="nav-link text-white <?= $_SERVER['REQUEST_URI'] === '/painel/listar-galeria' ? 'active' : '' ?>">
              <i class="far fa-images fa-lg me-2" width="24" height="24"></i>
              Galeria
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $actual_link ?>/painel/listar-novidades" class="nav-link text-white <?= $_SERVER['REQUEST_URI'] === '/painel/listar-novidades' ? 'active' : '' ?>">
              <i class="fal fa-file-alt fa-lg me-3" width="24" height="24"></i>
              Novidades
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="fas fa-user-shield fa-lg me-2" width="24" height="24"></i>
              Responsáveis
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="far fa-users-class fa-lg me-2" width="24" height="24"></i>
              Alunos
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $actual_link ?>/painel/listar-contatos" class="nav-link text-white <?= $_SERVER['REQUEST_URI'] === '/painel/listar-contatos' ? 'active' : '' ?>">
              <i class="far fa-phone fa-lg me-2" width="24" height="24"></i>
              Contatos
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $actual_link ?>/painel/listar-usuarios" class="nav-link text-white">
              <i class="fal fa-users fa-lg me-2" width="24" height="24"></i>
              Usuários
            </a>
          </li>
        </ul>
      </div>
      <!-- /.sidebar-menu -->
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper" style="padding-left: 1%;">