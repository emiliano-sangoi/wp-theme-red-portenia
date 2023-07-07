<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo RPT_THEME_DIR . '/assets/favicon.ico'; ?>"/>

        <?php
        $pagina_sobre_nosotros = getLinkPagina(PAGINA_SOBRE_NOSOTROS);
        $pagina_contacto = getLinkPagina(PAGINA_CONTACTO);

        $is_home_page = is_home() || is_front_page();
        global $pagename;

        wp_head();
        ?>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7GCLWM4CV0"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-7GCLWM4CV0');
        </script>
    </head>
    <body id="page-top" <?php body_class(); ?> >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand fst-italic pb-0" href="<?php echo site_url(); ?>">
                    <!--  https://danmarshall.github.io/google-font-to-svg-path/-->
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/navbar-brand-red.svg'; ?>" alt="..."/>
                    <!--            <div class="mt-1 text-end d-none d-md-block">
                                    <img src="<?php // echo RPT_THEME_DIR . '/assets/img/logos/navbar-brand-sub-dark2.svg';  ?>" alt="..."
                                         class="w-75"/>
                                </div>-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                        <li class="nav-item">
                            <a class="nav-link <?php echo $pagename == '' ? 'active' : ''; ?>"
                               href="<?php echo $is_home_page ? '#inicio' : site_url(); ?>">
                                Inicio
                            </a>
                        </li>
                        <!--<li class="nav-item"><a class="nav-link" href="#sobre-nosotros">Sobre nosotros</a></li>-->
                        <?php // if ($pagina_sobre_nosotros):  ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pagename == PAGINA_SOBRE_NOSOTROS ? 'active' : ''; ?>"
                               href="<?php echo $is_home_page ? '#sobre-nosotros' : site_url('/' . PAGINA_SOBRE_NOSOTROS); ?>">
                                Sobre nosotros
                            </a>
                        </li>
                        <?php // endif;  ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pagename == 'socios' ? 'active' : ''; ?>"
                               href="<?php echo $is_home_page ? '#socios' : site_url('/socios'); ?>">
                                Socios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pagename == 'novedades' ? 'active' : ''; ?>"
                               href="<?php echo $is_home_page ? '#novedades' : site_url('/novedades'); ?>">
                                Novedades
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pagename == 'contacto' ? 'active' : ''; ?>"
                               href="<?php echo $is_home_page ? '#contacto' : site_url('/contacto'); ?>">
                                Contacto
                            </a>
                        </li>
                        <?php if (getMostrarAcceso()) : ?>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;ACCESO SOCIOS  <!--ACCESO CLIENTES-->
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li>
                                    <a class="dropdown-item" type="button" href="<?php echo redOptGetEnlaceSistFact() ?>" target="_blank">
                                        <i class="fa-solid fa-arrow-right"></i>&nbsp; Facturación <!--Mandatos-->
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" type="button" href="<?php echo redOptGetEnlaceSistComp() ?>" target="_blank">
                                        <i class="fa-solid fa-arrow-right"></i>&nbsp; Compras
                                    </a>
                                </li>
                            </ul>   
                        </div>
                        <?php endif; ?>
                      </ul>
                </div>
            </div>
        </nav>
