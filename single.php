<?php
$pagename='novedades';
get_header();
?>
<div class="py-5 bg-light">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>

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
                            <a href="<?php echo site_url('/novedades'); ?>" class="text-decoration-none">
                                <i class="fa-solid fa-newspaper"></i>&nbsp;Novedades
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
                <div class="row mb-3">
                    <div class="col-12 fst-italic text-muted">
                        Publicado el <?php echo get_the_date('d/m/Y'); ?>&nbsp;a las <?php echo get_the_date('H:i'); ?> Hs.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php
                        if (has_post_thumbnail()):
                            echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover rounded'));
                        endif;
                        ?>
                    </div>
                </div>
            </div>

        </main>

    <?php endwhile; ?>
</div>
<?php
get_footer();
?>

