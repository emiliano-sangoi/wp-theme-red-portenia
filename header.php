<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo RPT_THEME_DIR . '/assets/favicon.ico'; ?>"/>

    <?php

    $pagina_sobre_nosotros  = getLinkPagina(PAGINA_SOBRE_NOSOTROS);
    $pagina_contacto  = getLinkPagina(PAGINA_CONTACTO);

    wp_head();
    ?>
</head>
<body id="page-top" <?php body_class(); ?> >
<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand fst-italic pb-0" href="#page-top">
            <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/navbar-brand-white.svg'; ?>" alt="..."/>
            <div class="mt-1 text-end d-none d-md-block">
                <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/navbar-brand-sub-white2.svg'; ?>" alt="..."
                     class="w-75"/>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#page-top">Inicio</a></li>
                <!--<li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Sobre nosotros</a></li>-->
                 <?php // if ($pagina_sobre_nosotros): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pagina_sobre_nosotros; ?>">
                                Sobre nosotros
                            </a>
                        </li>
                    <?php // endif; ?>
                <li class="nav-item"><a class="nav-link" href="#team">Socios</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Noticias</a></li>
                   <?php // if ($pagina_contacto): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pagina_contacto; ?>">
                                Contacto
                            </a>
                        </li>
                    <?php // endif; ?>
                <li class="nav-item"><a class="btn btn-primary" href="#contact">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Acceso socios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
