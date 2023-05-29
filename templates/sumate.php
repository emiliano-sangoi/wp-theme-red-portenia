<?php
/* Template Name: Sumate */

get_header();
?>
<div class="py-5 bg-light" id="sumate">
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
                    <p class="text-left text-navy fst-italic">
                        Sumate a nuestra red comercial, dejanos tus datos y comenzá a vivir los beneficios de trabajar con Red Porteña S.A. 
                    </p>
                    &nbsp;
                <h3 class="text-center font-weight-bold">
                    Completa con los datos
                </h3>
                <hr class="w-50 mx-auto" />

                    <div class="container pb-5">
                        <?php the_content(); ?>
                    </div>
                     </div>
            </main>
            <?php endwhile; ?>
        <?php endif; ?>
</div>
<?php get_footer(); ?>