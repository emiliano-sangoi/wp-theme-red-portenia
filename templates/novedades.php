<?php
/* Template Name: Novedades */
get_header();
?>
<div class="py-5 bg-light">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>

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
                <div>
                    <?php //the_content(); ?>
                </div>
                <div class="row position-relative" data-masonry='{"percentPosition": true }'>

                    <?php

                    $query = new WP_Query([
                        'category_name' => RPT_CATEGORIA_NOVEDADES,
                        'posts_per_page' => -1,
                        'post_status' => 'publish'
                    ]);

                    if ($query->have_posts()):
                        //var_dump($novedades);
                        while ( $query->have_posts() ) : ?>
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
            </div>

        </main>

    <?php endwhile; ?>
</div>
<?php
get_footer();
?>
