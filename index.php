<?php
get_header();

/* @var $paginaSobreNosotros WP_Post */
$paginaSobreNosotros = getPagina(PAGINA_SOBRE_NOSOTROS);
$vision = get_field('vision', $paginaSobreNosotros->ID);
$mision = get_field('mision', $paginaSobreNosotros->ID);
$objetivos = get_field('objetivos', $paginaSobreNosotros->ID);

?>

<!-- Masthead-->
<header class="" id="inicio">
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
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
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
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
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
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
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
    <div class="bg-dark text-light">
        <div class="container py-2">
            <div class="row row-cols-1 row-cols-md-3 g-3 g-lg-4">
                <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                    <i class="fa-brands fa-whatsapp"></i>&nbsp;+54 9 1234 567-899
                </div>
                <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                    <i class="fa-solid fa-phone"></i>&nbsp;(03492) 570727 / 5707321
                </div>
                <div class="col text-center">
                    <i class="fa-solid fa-location-dot"></i>&nbsp;Av. Pte. Perón 2101 (2300), Rafaela, Santa Fe
                </div>
            </div>
        </div>
    </div>
    <!--        <div class="masthead-subheading">Welcome To Our Studio!</div>-->
    <!--        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>-->
    <!--        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>-->
</header>

<!-- Sobre Nosotros -->
<section class="page-section bg-silver" id="sobre-nosotros">
    <div class="container">
        <div class="text-center mb-2 mb-lg-3">
            <h2 class="section-heading text-uppercase text-navy">
                <?php echo get_the_title($paginaSobreNosotros->ID) ?>
            </h2>
            <h3 class="section-subheading text-muted mb-0">Conoce nuestros objetivos, valores e historia.</h3>
        </div>
        <div class="row row-cols-1 row-cols-3 g-5 mt-2">
            <div class="col">
                <div class="text-center pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>" class="w-50"
                         style="transform: rotate(0deg);">
                </div>
                <h4 class="mt-5 text-primary">Misión</h4>
                <p class="small text-dark fst-italic pe-lg-3">
                    <?php echo $mision; ?>
                </p>
            </div>
            <div class="col">
                <h4 class="text-primary">Visión</h4>
                <p class="small text-dark fst-italic pe-lg-3">
                    <?php echo $vision; ?>
                </p>
                <div class="text-center mt-5 pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/vision.png'; ?>" class="w-50"
                         style="transform: rotate(-45deg);">
                </div>
            </div>
            <div class="col">
                <div class="text-center pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/target.png'; ?>" class="w-50"
                         style="transform: rotate(25deg);">
                </div>
                <h4 class="mt-5 text-primary">Objetivos</h4>
                <p class="small text-dark fst-italic pe-lg-3">
                    <?php echo $objetivos; ?>
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a class="btn btn-navy grow btn-xl text-uppercase"
               href="<?php echo site_url('/' . PAGINA_SOBRE_NOSOTROS); ?>">
                <i class="fa-solid fa-plus"></i>&nbsp;Ver más
            </a>
        </div>
    </div>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Socios de la red-->
<section class="page-section bg-navy text-white" id="socios">
    <div class="container">
        <div class="text-center mb-4 mb-lg-5">
            <h2 class="section-heading text-uppercase">Socios de la red</h2>
            <h3 class="section-subheading mb-0">Conoce los comercios adheridos y forma parte de nuestra red.</h3>
            <!--            <hr class="border-white w-25 py-3 text-center" style="border-width: 3px;"/>-->
        </div>

        <div class="row g-5">
            <div class="col">
                <div class="card bg-silver position-relative h-100 shadow">
                    <div class="card-header py-4 bg-silver border-navy" style="border-bottom-width: 5px">
                        <span class="fa-stack fa-2x mx-0">
                            <i class="fas fa-circle fa-stack-2x text-navy"></i>
                            <i class="fas fa-people-group fa-stack-1x fa-inverse text-light"></i>
                        </span>
                        <h5 class="my-3 text-start  text-navy fw-bold text-uppercase d-inline-block text-wrap">
                            Conocenos!
                        </h5>
                    </div>
                    <div class="card-body px-4 text-navy fst-italic">
                            En el siguiente enlace podrás acceder a la lista de socios de nuestra red
                    </div>
                    <div class="card-footer border-top-0 bg-silver">
                        <a href="<?php echo site_url('/socios') ?>" class="btn btn-navy stretched-link">
                            Ver socios
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-silver position-relative h-100 shadow">
                    <div class="card-header py-4 bg-silver border-navy" style="border-bottom-width: 5px">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x text-navy"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse text-light"></i>
                        </span>
                        <h5 class="my-3 text-start text-navy fw-bold text-uppercase d-inline-block">
                            Sumate!
                        </h5>
                    </div>
                    <div class="card-body px-4 text-navy fst-italic">
                            Podes sumarte fácilmente completando un formulario con tus datos, solo te llevara algunos minutos.
                    </div>
                    <div class="card-footer border-top-0 bg-silver">
                        <a href="<?php echo site_url('/sumate') ?>" class="btn btn-navy stretched-link">
                            Completar formulario
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-silver position-relative h-100 shadow">
                    <div class="card-header py-4 bg-silver border-navy" style="border-bottom-width: 5px">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x text-navy"></i>
                            <i class="fas fa-question fa-stack-1x fa-inverse text-light"></i>
                        </span>
                        <h5 class="my-3 text-start  text-navy fw-bold text-uppercase d-inline-block text-wrap">
                            ¿Dudas?
                        </h5>
                    </div>
                    <div class="card-body px-4 text-navy fst-italic">
                            Revis&aacute; la sección de preguntas frecuentes para evacuar alguna inquietud.
                    </div>
                    <div class="card-footer border-top-0 bg-silver">
                        <a href="<?php echo site_url('/socios') ?>" class="btn btn-navy stretched-link">
                            Preguntas frecuentes
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">

<!--        <div class="row mt-5">-->
<!--            <div class="col col-md-4 align-self-start">-->
<!--                        <span class="fa-stack fa-3x mx-0">-->
<!--                            <i class="fas fa-circle fa-stack-2x text-silver"></i>-->
<!--                            <i class="fas fa-people-group fa-stack-1x fa-inverse text-primary"></i>-->
<!--                        </span>-->
<!--                <h5 class="my-3 text-start">-->
<!--                    Conoce nuestros socios-->
<!--                </h5>-->
<!--                <p class="mb-3 mb-lg-4 small pe-lg-5">-->
<!--                    En el siguiente enlace podrás acceder a la lista de socios de nuestra red-->
<!--                </p>-->
<!--                <div>-->
<!--                    <a href="--><?php //echo site_url('/socios') ?><!--" class="btn btn-outline-white align-self-baseline">-->
<!--                        Ver socios-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col col-md-4 px-lg-5 align-self-start">-->
<!--                        <span class="fa-stack fa-3x">-->
<!--                            <i class="fas fa-circle fa-stack-2x text-silver"></i>-->
<!--                            <i class="fas fa-plus fa-stack-1x fa-inverse text-primary"></i>-->
<!--                        </span>-->
<!--                <h5 class="my-3">-->
<!--                    Sumate-->
<!--                </h5>-->
<!--                <p class="mb-3 mb-lg-4 small">-->
<!--                    Podes sumarte fácilmente completando un formulario con tus datos, solo te llevara algunos-->
<!--                    minutos.-->
<!--                </p>-->
<!--                <div>-->
<!--                    <a href="--><?php //echo site_url('/' . PAGINA_SUMATE); ?><!--"-->
<!--                       class="btn btn-outline-white align-self-baseline">-->
<!--                        Completar formulario-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col col-md-4 ps-lg-5 align-self-start">-->
<!--                        <span class="fa-stack fa-3x">-->
<!--                            <i class="fas fa-circle fa-stack-2x text-silver"></i>-->
<!--                            <i class="fas fa-question fa-stack-1x fa-inverse text-primary"></i>-->
<!--                        </span>-->
<!--                <h5 class="my-3">-->
<!--                    ¿Tenés dudas?-->
<!--                </h5>-->
<!--                <p class="mb-3 mb-lg-4 small">-->
<!--                    Revis&aacute; la sección de preguntas frecuentes para evacuar alguna inquietud.-->
<!--                </p>-->
<!--                <div>-->
<!--                    <a class="btn btn-outline-white align-self-baseline" data-bs-toggle="modal"-->
<!--                       href="#faqSociosModal">-->
<!--                        Preguntas frecuentes-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->



        <div id="carouselSocios" class="carousel slide w-100 mt-5 pt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php

                $query = new WP_Query([
                    'category_name' => RPT_CATEGORIA_SOCIOS,
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                ]);
                if ($query->have_posts()):
                    $posts = $query->get_posts();
                    $c = 0;
                    while (!empty($posts)):
                        $subgrupo_posts = array_slice($posts, 0, RPT_CAROUSEL_SOCIOS_ITEMS_POR_SLIDE);
                ?>
                        <div class="carousel-item <?php echo $c++ == 0 ? 'active' : '';?> text-center" data-bs-interval="<?php echo RPT_CAROUSEL_SOCIOS_VELOCIDAD; ?>">
                    <?php
                        foreach ($subgrupo_posts as $post):
                            if (has_post_thumbnail($post->ID)):
                    ?>
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" title="<?php echo $post->post_title; ?>"
                                                         class="d-inline-block mx-4 rounded-5 align-middle w-10 h-100 img-fluid" style="min-height: 10rem;">
                    <?php
                            else:
                    ?>
                                <img src="https://fakeimg.pl/400x400?text=Logo"
                                     class="d-inline-block mx-4 rounded-5 align-middle w-10 h-100 img-fluid" title="<?php echo $post->post_title; ?>" style="min-height: 10rem;" />
                    <?php
                            endif;
                            array_shift($posts);
                        endforeach;
                ?>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
<!--                <div class="carousel-item active text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/6-aparicio-tv.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/7-arc.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/9-casa-mergen.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/20-enriqueta-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/12-centro-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/15-dm-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/19-el-trebol.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/39-todo-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/17-duilio-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/31-montero.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/1-5competencia.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/35-sanchez-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/37-suarez-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/16-don-solis.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/11-centro-gar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/5-aparicio-television.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/8-casa-costa.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/22-fachin-muebles.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/13-collage.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/3-amasca.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/30-mi-grey.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/23-gran-bazar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/32-mutual-pilar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/25-jb.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/4-ammpe.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/24-innova.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/14-dall-agata.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/21-eureka-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/29-mci.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/27-liendos-muebleria.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/10-casa-sarmiento.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/28-masut.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/38-tecno-frio.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/36-selex.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/18-el-mate.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--                <div class="carousel-item text-center" data-bs-interval="2500">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/2-alto-voltaje.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/34-refricer.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/26-lauser-hogar.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/33-novedades-melly.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                    <img src="--><?php //echo RPT_THEME_DIR . '/assets/img/logos/socios/40-mutual-sarmiento.jpg'; ?><!--"-->
<!--                         class="d-inline-block mx-4 rounded-5 align-middle w-10">-->
<!--                </div>-->
<!--            </div>-->
            <button class="carousel-control-prev w-15" type="button" data-bs-target="#carouselSocios"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next w-15" type="button" data-bs-target="#carouselSocios"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
</section>


<section class="page-section bg-silver2" id="novedades">
    <div class="container">
        <div class="text-center text-navy">
            <h2 class="section-heading text-uppercase">NOVEDADES</h2>
            <h3 class="section-subheading">
                Mantenete al tanto sobre novedades y eventos realizados por la Red
            </h3>
        </div>
        <div class="row position-relative" data-masonry='{"percentPosition": true }'>
            <?php

            $query = new WP_Query([
                'category_name' => RPT_CATEGORIA_NOVEDADES,
                'posts_per_page' => 3,
                'post_status' => 'publish'
            ]);

            if ($query->have_posts()):
                //var_dump($novedades);
                while ($query->have_posts()) : ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <?php
                        $query->the_post();
                        include locate_template('partials/novedad.php');
                        /* https://developer.wordpress.org/reference/functions/wp_reset_postdata/ */
                        wp_reset_postdata();
                        ?>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="text-center mt-5 pt-4">
            <a class="btn btn-navy btn-xl text-uppercase" href="<?php echo site_url('/novedades'); ?>">
                <i class="fa-solid fa-plus"></i>&nbsp;Más novedades
            </a>
        </div>
    </div>
</section>


<!-- Contact-->
<section class="page-section bg-black" id="contacto">
    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">CONTACTO</h2>
            <h3 class="section-subheading text-muted">
                Si tenes alguna duda o querés realizar una consulta podes escribirnos y a la brevedad la
                responderemos.</h3>
        </div>


        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="apellido" type="text" placeholder="Apellidos *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su apellido.</div>
                    </div>
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="nombre" type="text" placeholder=" Nombre *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su nombre.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Correo electrónico *"
                               data-sb-validations="required,email"/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un e-mail.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Correo ingresado incorrecto.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Teléfono*"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese un numero de teléfono.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Escribí tu consulta ... *"
                                  data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Ingrese su consulta..</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Mensaje enviado correctamente!</div>

                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar
                </button>
            </div>
        </form>
    </div>
</section>

<?php
get_footer();
?>
