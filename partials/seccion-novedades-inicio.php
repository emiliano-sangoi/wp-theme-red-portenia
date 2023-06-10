<div class="container">
    <div class="text-center text-navy">
        <h2 class="section-heading text-uppercase">NOVEDADES</h2>
        <h3 class="section-subheading">
            Mantenete al tanto sobre novedades y eventos realizados por la Red
        </h3>
    </div>
    <div class="row position-relative g-5" data-masonry='{"percentPosition": true }'>
        <?php

        $query = new WP_Query([
            'category_name' => RPT_CATEGORIA_NOVEDADES,
            'posts_per_page' => 3,
            'post_status' => 'publish'
        ]);

        if ($query->have_posts()):
            //var_dump($novedades);
            while ($query->have_posts()) : ?>
                <div class="col-12 col-sm-6 col-md-4 mb-4">
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
