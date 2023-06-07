<?php
get_header();
?>
<div class="py-5 bg-light">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>

        <header class="bg-silver py-5 shadow-sm">
            <div class="container pt-5">
                <h1 class="fw-bold text-navy text-uppercase mt-5">
                    <?php the_title(); ?>
                </h1>
                <hr class="border-navy opacity-100 w-25" style="border-width: 5px"/>
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
        <main class="mt-5 pt-5">
            <div class="container pb-5">
                <?php the_content(); ?>
            </div>

        </main>

    <?php endwhile; ?>
</div>
<?php
get_footer();
?>
