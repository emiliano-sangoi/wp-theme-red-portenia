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
            <img src="<?php echo RPT_THEME_DIR . '/images/logos/navbar-brand-white.svg'; ?>" alt="..."/>
            <div class="mt-1 text-end d-none d-md-block">
                <img src="<?php echo RPT_THEME_DIR . '/images/logos/navbar-brand-sub-white2.svg'; ?>" alt="..."
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
<!-- Masthead-->
<header class="">
    <div id="carouselExampleCaptions" class="carousel slide mt-5 w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="6000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a class="btn btn-primary btn-xl text-uppercase my-4" href="#services">
                        Ver m&aacute;s
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <a class="btn btn-primary btn-xl text-uppercase my-4"  href="#services">
                        Ver m&aacute;s
                    </a>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <a class="btn btn-primary btn-xl text-uppercase my-4" href="#services">
                        Ver m&aacute;s
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="bg-navy text-silver shadow-sm">
        <div class="container py-3">
            <div class="row row-cols-1 row-cols-md-3 g-3 g-lg-4">
                <div class="col text-center">
                    <i class="fa-brands fa-whatsapp"></i>&nbsp;+54 9 1234 567-899
                </div>
                <div class="col text-center">
                    <i class="fa-solid fa-phone"></i>&nbsp;(03492) 570727 / 5707321
                </div>
                <div class="col text-center">
                    <i class="fa-solid fa-location-dot"></i>&nbsp;Av. Pte. Perón 2101 (CP 2300), Rafaela, Santa Fe
                </div>
            </div>
        </div>
    </div>
    <!--        <div class="masthead-subheading">Welcome To Our Studio!</div>-->
    <!--        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>-->
    <!--        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>-->
</header>
