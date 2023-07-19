<?php
/* Template Name: Sobre Nosotros */

get_header();
?>
<div class="py-5 bg-light" id="sobre-nosotros">
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
            <main>
                <section class="page-section bg-white" id="sobre-nosotros">
                    <?php
                    include locate_template('partials/seccion-sobre-nosotros-inicio.php');
                    ?>
                </section>
                <div class="container py-5">

                    <?php
                    $custom_fields = get_fields(get_the_ID());
                    ?>
                    <div class="row mb-5">
                        <div class="col">
                            <h4 class="fw-bold text-blue">
                                Transparencia
                            </h4>
                            <div class="lead">
                                <?php echo isset($custom_fields['transparencia']) ? nl2br($custom_fields['transparencia']) : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold text-blue">
                                Esp&iacute;ritu de equipo
                            </h4>
                            <div class="lead">
                                <?php echo isset($custom_fields['espiritu_de_equipo']) ? nl2br($custom_fields['espiritu_de_equipo']) : ''; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-bold text-blue">
                                Compromiso
                            </h4>
                            <div class="lead">
                                <?php echo isset($custom_fields['compromiso']) ? nl2br($custom_fields['compromiso']) : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="fw-bold text-blue">
                                Respeto
                            </h4>
                            <div class="lead">
                                <?php echo isset($custom_fields['respeto']) ? nl2br($custom_fields['respeto']) : ''; ?>
                            </div>
                        </div>
                    </div>
               </div>

            </main>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
