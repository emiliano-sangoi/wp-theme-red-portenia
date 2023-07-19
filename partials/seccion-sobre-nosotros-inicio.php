<?php
/* @var $paginaSobreNosotros WP_Post */
$paginaSobreNosotros = getPagina(PAGINA_SOBRE_NOSOTROS);
$vision = get_field('vision', $paginaSobreNosotros->ID);
$mision = get_field('mision', $paginaSobreNosotros->ID);
$objetivos = get_field('objetivos', $paginaSobreNosotros->ID);
?>
<div class="container">
    <div class="row row-cols-3 g-4 g-lg-5">
        <div class="col">
            <div class="card bg-white border-0 shadow text-center h-100 rounded-3">
                <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>"
                     class="card-img-top img-fluid w-40 py-3 py-lg-4 my-1 mx-auto"
                     style="transform: rotate(0deg);">
                <div class="card-body bg-whitesmoke text-start px-lg-4 border-top border-secondary rounded-bottom-3"
                     style="border-top-width: 7px !important;">
                    <h4 class="card-title text-primary">
                        Misión
                    </h4>
                    <p class="card-text text-navy fst-italic">
<?php echo nl2br($mision); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-white border-0 shadow text-center h-100 rounded-3">
                <div class="card-body bg-whitesmoke text-start px-lg-4 border-bottom border-secondary rounded-top-3"
                     style="border-bottom-width: 7px !important;">
                    <h4 class="card-title text-primary">
                        Visión
                    </h4>
                    <p class="card-text text-navy fst-italic">
<?php echo nl2br($vision); ?>
                    </p>
                </div>
                <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/vision.png'; ?>"
                     class="card-img-bottom w-40 py-3 py-lg-4 my-1 mx-auto align-middle"
                     style="transform: rotate(25deg);">
            </div>
        </div>
        <div class="col">
            <div class="card bg-white border-0 shadow text-center h-100 rounded-3">
                <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/target.png'; ?>"
                     class="card-img-top img-fluid w-40 py-3 py-lg-4 my-1 mx-auto"
                     style="transform: rotate(25deg);">
                <div class="card-body bg-whitesmoke text-start px-lg-4 border-top border-secondary rounded-bottom-3"
                     style="border-top-width: 7px !important;">
                    <h4 class="card-title text-primary">
                        Objetivos
                    </h4>
                    <p class="card-text text-navy fst-italic">
<?php echo nl2br($objetivos); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
