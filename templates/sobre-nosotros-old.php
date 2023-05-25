<?php


// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SOBRE_NOSOTROS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();

?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-4 pb-5 altura-minima" id="sobre-nosotros">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>

    <h1 class="font-weight-bold text-primary">
        <?php echo $pagina->post_title; ?>
    </h1>

    <hr/>

    <div>
        <?php
        if (!empty($pagina->post_content)):
            echo $pagina->post_content;
        endif;
        ?>

    </div>

    <div class="row">
        <div class="col-12 col-md-9">
            <?php
            if (!empty($pagina->post_content)):
                echo nl2br($pagina->post_content);
                ?>
            <?php endif; ?>
        </div>
    </div>

    <h3 class="section-subheading text-muted mb-0">Conoce nuestros objetivos, valores e historia.</h3>

    <div class="row row-cols-1 row-cols-3 g-5 mt-2">
        <div class="col">
            <!--<div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">-->
                <div class='card-body py-3 py-lg-4'>
                    <div class="text-center pe-lg-3">
                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>" class="w-50"
                             style="transform: rotate(0deg);">
                    </div>
                    <h4 class="mt-5 card-title font-weight-bold text-center mb-0">
                    ¿Por qué elegirnos?
                    </h4>
                    <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                    <div class="card-text px-2 px-lg-3 text-lead mb-2">
                        <?php
                        $vision = get_field('vision', $pagina);
                        echo nl2br($vision);
                        ?>
                    </div>
                </div>
            <!--</div>-->
        </div>
        <div class="col">
            <!--<div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">-->
                <div class='card-body py-3 py-lg-4'>
                    <h4 class="card-title font-weight-bold text-center mb-0">
                        <!--Misi&oacute;n-->
                        ¿Cómo trabajamos?
                    </h4>
                    <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                    <div class="card-text px-2 px-lg-3 text-lead mb-2">
                        <?php
                        $mision = get_field('mision', $pagina);
                        echo nl2br($mision);
                        ?>
                    </div>
                    <div class="text-center mt-5 pe-lg-3">
                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/vision.png'; ?>" class="w-50"
                             style="transform: rotate(-45deg);">
                    </div>
                </div>
            <!--</div>-->
        </div>
        <div class="col">
            <!--<div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">-->
                <div class='card-body py-3 py-lg-4'>
                    <div class="text-center pe-lg-3">
                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/target.png'; ?>" class="w-50"
                             style="transform: rotate(25deg);">
                    </div>
                    <h4 class="mt-5 card-title font-weight-bold text-center mb-0">
                        Objetivos
                    </h4>
                    <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                    <div class="card-text px-2 px-lg-3 text-lead mb-2">
                        <?php
                        $objetivos = get_field('objetivos', $pagina);
                        echo nl2br($objetivos);
                        ?>
                    </div>
                </div>
            <!--</div>-->
        </div>
    </div>

    <div class="row row-cols-1 row-cols-2 g-5 mt-2">
        <?php
        $transparencia = get_field('transparencia', $pagina);
        if ($transparencia):
            ?>

            <div class="col">
                <div class='card bg-light text-black shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h5 class="card-title text-primary font-weight-bold text-left mb-0">
                            <!--Misi&oacute;n-->
                            Transparencia
                        </h5>
                        <div class="text-left mt-3 p-2">
                            <?php echo nl2br($transparencia); ?>
                        </div>
                    </div>
                </div>
            </div>
          <?php
        endif;

        $compromiso = get_field('compromiso', $pagina);
        if ($compromiso):
            ?>

            <div class="col">
                <div class='card bg-light text-black shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h5 class="card-title text-primary font-weight-bold text-left mb-0">
                            Compromiso
                        </h5>
                        <div class="text-left mt-3 p-2">
                            <?php echo nl2br($compromiso); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endif;
        ?>
    </div>

     <div class="row row-cols-1 row-cols-2 g-5 mt-2">
        <?php
        $espiritu_equipo = get_field('espiritu_equipo', $pagina);
            if($espiritu_equipo):
            ?>

            <div class="col">
                <div class='card bg-light text-black shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h5 class="card-title text-primary font-weight-bold text-left mb-0">
                           Espíritu de Equipo
                        </h5>
                        <div class="text-left mt-3 p-2">
                            <?php echo nl2br($espiritu_equipo); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        endif;

        $respeto = get_field('respeto', $pagina);
        if ($respeto):
            ?>
            <div class="col">
                <div class='card bg-light text-black shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h5 class="card-title text-primary font-weight-bold text-left mb-0">
                           Respeto
                        </h5>
                        <div class="text-left mt-3 p-2">
                            <?php echo nl2br($respeto); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endif;

        ?>
    </div>
</div>

<?php get_footer(); ?>
