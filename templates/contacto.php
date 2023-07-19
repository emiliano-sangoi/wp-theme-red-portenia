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
                    <div class="row position-relative bg-white rounded border-light shadow p-4">
                        <div class="col">
                            <h2 class="text-center font-weight-bold py-2">Envianos tu consulta</h2>
                            <hr class="w-50 mx-auto"/>
                            <p class="text-navy fst-italic text-center">Si tenés dudas o querés realizar una consulta
                                podes escribirnos y a la brevedad la responderemos.</p>
                            <div class="alert alert-info mb-3"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Recorda
                                que contamos con una seccion de <a href="#faqSociosModal" class="btn-link text-navy"
                                                                   data-bs-toggle="modal">
                                    preguntas frecuentes</a> en donde evacuamos muchas de las consultas m&aacute;s
                                comunes que nos realizan.
                            </div>
                            <div class="bg-light mt-4 rounded shadow-sm border border-light p-4 p-lg-5">
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
    $('.nav-link-contacto').addClass('active');
</script>
