<?php
/* Template Name: Contacto */

get_header();
?>
<div class="py-5 bg-light" id="contacto">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>

            <header class="bg-navy py-5 shadow-sm">
                <div class="container pt-5">
                    <h1 class="fw-bold text-white text-uppercase mt-5">
                        <?php the_title(); ?>
                    </h1>
                    <hr class="border-white opacity-100 w-25" style="border-width: 5px"/>
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
                        $id_cat = get_cat_id(RPT_CATEGORIA_CONTACTO);
                        if ($id_cat) {
                            $args_otros = array('category' => $id_cat, 'posts_per_page' => -1, 'post_status' => 'publish');
                            $post_contacto = get_posts($args_otros);
                        }
                        ?>
                        <div class="row row-cols-1 row-cols-2 g-4 mt-1">
                            <div class="col-6 mb-6">
                                <?php if (isset($post_contacto[0])): ?>    
                                    <?php
                                    foreach ($post_contacto as $post):
                                        ?>


                                        <?php
                                        include locate_template('partials/contacto.php');
                                        ?>

                                        <?php
                                    endforeach;
                                    ?> 
                                <?php endif; ?>
                                <div class="mt-5">
                                    <iframe class="w-75 rounded" height="220"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.817253841684!2d-61.5084177!3d-31.225792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95caae00a9e3f68f%3A0x49f2714d1610ceb9!2sRED%20PORTE%C3%91A%20SA!5e0!3m2!1sen!2sar!4v1685492620983!5m2!1sen!2sar"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        <!--</div>-->

                        <div class="col-6">
                            <h2 class="text-center font-weight-bold py-2">Envianos tu consulta</h2>
                            <hr class="w-50 mx-auto" />
                            <p class="text-center text-navy fst-italic">Si tenés dudas o querés realizar una consulta podes escribirnos y a la brevedad la responderemos.</p>
                            <!--<div>-->
                            <?php the_content(); ?>
                        </div>
                    </div>
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