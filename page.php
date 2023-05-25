<?php
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
                <?php
                    // Flexy breadcrumb
                    // https://wordpress.org/plugins/flexy-breadcrumb/
                    if ( is_plugin_active( 'flexy-breadcrumb/flexy-breadcrumb.php' ) ) {
                        echo do_shortcode('[flexy_breadcrumb]');
                    }
                ?>
            </div>
        </header>
        <main>
            <div class="container py-5">
                <?php the_content(); ?>
            </div>

        </main>

    <?php endwhile; ?>
</div>
<?php
get_footer();
?>
