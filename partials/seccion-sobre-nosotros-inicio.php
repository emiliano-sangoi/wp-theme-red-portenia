<?php

/* @var $paginaSobreNosotros WP_Post */
$paginaSobreNosotros = getPagina(PAGINA_SOBRE_NOSOTROS);
$vision = get_field('vision', $paginaSobreNosotros->ID);
$mision = get_field('mision', $paginaSobreNosotros->ID);
$objetivos = get_field('objetivos', $paginaSobreNosotros->ID);

?>
<div class="container">
    <div class="text-center mb-4 mb-lg-5">
        <h2 class="section-heading text-uppercase text-navy">
            <?php echo get_the_title($paginaSobreNosotros->ID) ?>
        </h2>
        <h3 class="section-subheading text-muted mb-0">Conoce nuestros objetivos, valores e historia.</h3>
    </div>
    <div class="row row-cols-3 g-5">
        <div class="col">
            <div class="text-center pe-lg-3">
                <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>" class="w-50"
                     style="transform: rotate(0deg);">
            </div>
            <h4 class="mt-5 text-primary">Misión</h4>
            <p class="text-dark fst-italic pe-lg-3">
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
