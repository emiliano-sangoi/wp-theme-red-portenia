<?php
/* Template Name: Sumate */

get_header();
?>
<div class="py-5 bg-light" id="sumate">
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
                            <li class="breadcrumb-item">
                                <a href="<?php echo site_url('/socios'); ?>" class="text-decoration-none text-light">
                                    Socios
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
                    <div class="bg-white p-4 shadow-sm border border-silver text-navy rounded ">
                        <div class="container pb-5">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
