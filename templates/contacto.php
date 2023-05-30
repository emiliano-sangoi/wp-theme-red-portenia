<?php
/* Template Name: Contacto */

get_header();
?>
<div class="py-5 bg-light" id="contacto">
    <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <header class="bg-silver py-5 shadow-sm">
                    <div class="container pt-5">
                        <h1 class="fw-bold text-primary text-uppercase mt-5">
                            <?php the_title(); ?>
                        </h1>
                        <hr class="border-primary opacity-100 w-25" style="border-width: 5px"/>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo site_url(); ?>" class="text-decoration-none">
                                        <i class="fa-solid fa-house"></i>&nbsp;Inicio
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php the_title(); ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </header>
              <main class="mt-5">
            <div class="container pb-5">
                <!--<h3 class="text-left font-weight-bold">Oficinas de atención al público</h3>-->
                <div class="row position-relative" data-masonry='{"percentPosition": true }'>

                    <?php
                    $id_cat = get_cat_id(RPT_CATEGORIA_OFICINAS);
                    if ($id_cat) {
                        $args_otros = array('category' => $id_cat, 'posts_per_page' => -1, 'post_status' => 'publish');
                        $post_oficinas = get_posts($args_otros);
                    }
                 ?>
                    <div class="row row-cols-1 row-cols-3 g-4 mt-1">
                     <?php if (isset($post_oficinas[0])): ?>    
                            <?php
                                foreach ($post_oficinas as $post):
                            ?>
                            <div class="col-4">
                        
                            <?php
                                include locate_template('partials/contacto.php');
                            ?>
                            </div>
                             <?php
                            endforeach;
                            ?> 
                        <?php endif; ?>
                    </div>
                </div>
                <h2 class="text-center font-weight-bold py-5">Envianos tu consulta</h2>
                    <hr class="w-50 mx-auto" />
                <p class="text-center text-navy fst-italic">Si tenés dudas o querés realizar una consulta podes escribirnos y a la brevedad la responderemos.</p>
                <div>
                    <?php the_content(); ?>
                </div>
                
            </div>

        </main>

            <?php endwhile; ?>
        <?php endif; ?>
</div>
<?php get_footer(); ?>

<script>
//    $('a.nav-link').removeClass('active');
    $('.nav-link-contacto').addClass('active');
</script>