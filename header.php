<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo RPT_THEME_DIR . '/assets/favicon.ico'; ?>" />

    <?php
        wp_head();
    ?>
</head>
<body id="page-top" <?php body_class(); ?> >
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand fst-italic" href="#page-top">
<!--            <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/navbar-logo.svg'; ?><!--" alt="..." />-->
            <?php
                bloginfo('name');
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Socios</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="#contact">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Acceso socios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>
