<?php
/* Template Name: Contacto */
//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_CONTACTO);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="contacto">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url(); ?>">
                    Inicio
                </a>
            </li>    
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
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ning&uacute;n contenido en esta secci&oacute;n.
            </p>
            <?php
        else:
            ?>
            <div class="mt-4 bg-light px-3 px-lg-5 pb-5 pt-4 border border-secondary">
                <h3 class="text-center font-weight-bold">
                    Envianos tu consulta
                </h3>
                <hr class="w-50 mx-auto"/>
                <p class="text-center text-navy fst-italic">
                    Si tenés dudas o querés realizar una consulta podes escribirnos y a la brevedad la responderemos. 
                </p>
                <?php
                echo do_shortcode($pagina->post_content);
                ?>
            </div>
        <?php endif; ?>
    </div>
   </div>

<?php get_footer(); ?>

<script>
//    $('a.nav-link').removeClass('active');
    $('.nav-link-contacto').addClass('active');
</script>