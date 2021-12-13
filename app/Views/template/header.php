<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PAS RPL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets') ?>/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!"><?= $judul_halaman ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link <?= ($halaman_aktif == "home") ? "active" : "" ?>" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($halaman_aktif == "beranda") ? "active" : "" ?>" aria-current="page" href="<?= base_url("/home/barang") ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($halaman_aktif == "kontak") ? "active" : "" ?>" href="<?= base_url('home/kontak') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>