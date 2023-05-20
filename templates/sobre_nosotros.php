<?php
/* Template Name: Sobre Nosotros */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SOBRE_NOSOTROS);
//if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
//    wp_redirect(home_url(), 301);
//    exit;
//}

get_header();

?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-4 pb-5 altura-minima" id="sobre-nosotros">
<!--    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>   
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>-->

    <h1 class="font-weight-bold text-primary">SOBRE NOSOTROS
        //<?php // echo $pagina->post_title; ?>
    </h1>
    <hr/>
    
    <div>
        <?php
//        if (!empty($pagina->post_content)):
//            echo $pagina->post_content;
//        endif;
        ?>
        
    </div>
    
    <h2 class="h3 font-weight-bold mt-5">
        Nosotros
    </h2>
    
    <section class="py-3">

    
    </section>
</div>


<?php get_footer(); ?>