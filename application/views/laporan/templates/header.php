<!--
=========================================================
* Material Dashboard 2 - v3.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/bootstrap/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/bootstrap/img/favicon.png" />
    <title>
        Laporan Perkara
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/assets/bootstrap/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/bootstrap/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/f8c43fa68d.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/assets/bootstrap/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-success">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('home'); ?>">
                <img src="<?= base_url('assets/img/') ?>logoapp.png" alt="" width="100" class="drop-shadow">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="<?= base_url('laporan/'); ?>"> <i class="fas fa-fw fa-tachometer-alt text-white"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('banding/userProfile'); ?>"> Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>