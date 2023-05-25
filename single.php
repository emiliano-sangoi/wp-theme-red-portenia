<?php
get_header();
?>
    <div class="container py-5">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <h2>
                <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
            <?php comments_template( '', true ); ?>

        <?php endwhile; ?>
    </div>
<?php
get_footer();
?>
