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
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php the_title(); ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </header>
            <main class="mt-5">
                <div class="container pb-5">
                    <div class=" alert alert-light align-items-center shadow-sm border border-silver text-navy">
                        <h3 class="text-center font-weight-bold ">BENEFICIOS</h3>
                        <hr class="w-50 mx-auto" />

                        <p class="text-navy text-start">FORMÁ PARTE DE NUESTRA RED Y OBTENÉ GRANDES RESULTADOS.</p>
                        <ul>
                            <li class="fst-italic">
                                Acceso a grandes marcas
                            </li>
                            <li class="fst-italic">
                                Mejores costos y herramientas financieras
                            </li>
                            <li class="fst-italic">
                                Mayor rentabilidad
                            </li>
                            <li class="fst-italic"> 
                                Gestión comercial - Compra en mayor volumen - Mejores precios
                            </li>
                            </br>
                        </ul>

                        <p>
                            Además, contamos con un depósito de carga de 1800m2 y un servicio post venta para aquellas localidades que no poseen service oficial.
                        </p>
                    </div>

                </div>

                <div class="container pb-3">
                    <h3 class="text-center font-weight-bold">
                        Completa con los datos
                    </h3>
                    <hr class="w-50 mx-auto" />
                    <p class="text-center text-navy fst-italic">
                        Sumate a nuestra red comercial, dejanos tus datos y comenzá a vivir los beneficios de trabajar con Red Porteña S.A. 
                    </p>

                    <div class="container pb-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>