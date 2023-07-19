<?php
get_header();
/* @var $paginaSobreNosotros WP_Post */
$paginaSobreNosotros = getPagina(PAGINA_SOBRE_NOSOTROS);
?>

<div class="container-fluid">
    <?php
    echo do_shortcode('[smartslider3 slider="3"]');
    ?>
</div>
<div class="bg-dark text-light">
    <div class="container py-2">
        <div class="row row-cols-1 row-cols-md-3 g-3 g-lg-4">
            <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                <i class="fa-brands fa-whatsapp"></i>&nbsp; <?php echo redOptGetWhatsUp(); ?>
            </div>
            <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                <i class="fa-solid fa-phone"></i>&nbsp;<?php echo redOptGetTelefonoFijo(); ?>
            </div>
            <div class="col text-center">
                <i class="fa-solid fa-location-dot"></i>&nbsp;<?php echo redOptGetDireccion(); ?>
            </div>
        </div>
    </div>
</div>

<!-- Masthead-->
<!--El header original esta en partials/masthead.php-->

<!-- Sobre Nosotros -->

<section class="page-section bg-white" id="sobre-nosotros">
    <div class="py-5 bg-light" id="sobre-nosotros">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-heading text-uppercase text-navy">
                    <?php echo get_the_title($paginaSobreNosotros->ID) ?>
                </h2>
                <h3 class="section-subheading text-muted mb-0">
                    Conoce nuestros objetivos, valores e historia.
                </h3>
            </div>
            <?php $custom_fields = get_fields($paginaSobreNosotros->ID); ?>
            <div class="row g-3 g-lg-5 mt-1">
                <div class="col-12 col-md-6">
                    <img src="<?php echo $custom_fields["imagen-home"]["url"]; ?>"
                         class="rounded-2 img-fluid" >
                </div>
                <div class="col-12 col-md-6">
                    <?php echo isset($custom_fields['text-home']) ? nl2br($custom_fields['text-home']) : ''; ?>
                    <div class="mt-5">
                        <a class="btn btn-outline-navy grow btn-xl text-uppercase shadow-sm"
                           href="<?php echo site_url('/' . PAGINA_SOBRE_NOSOTROS); ?>">
                            <i class="fa-solid fa-plus"></i>&nbsp;Ver más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Socios de la red-->
<section class="page-section bg-navy text-white" id="socios">
    <?php
    include locate_template('partials/seccion-socios-inicio.php');
    ?>
</section>


<section class="page-section bg-white" id="novedades">
    <?php
    include locate_template('partials/seccion-novedades-inicio.php');
    ?>
</section>


<!-- Contact-->
<section class="page-section bg-black" id="contacto">
    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">CONTACTO</h2>
            <h3 class="section-subheading text-white">
                Si tenes alguna duda o querés realizar una consulta podes escribirnos y a la brevedad la
                responderemos.</h3>

            <?php
            echo do_shortcode('[contact-form-7 id="376" title="contacto"]');
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
