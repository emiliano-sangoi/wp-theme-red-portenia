<?php
/* Template Name: Socios */
get_header();
?>
<div class="py-5 bg-light" id="socios">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>

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
                 <?php

                            $query = new WP_Query([
                                'category_name' => RPT_CATEGORIA_SOCIOS,
                                'posts_per_page' => -1,
                                'post_status' => 'publish'
                            ]);

                            $provincias = [];

                 ?>

                <ul class="nav nav-tabs nav-justified " id="tabSocios" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fs-5" id="todos-tab" data-bs-toggle="tab"
                                data-bs-target="#todos-tab-pane" type="button" role="tab" aria-controls="todos-tab-pane"
                                aria-selected="true">
                            Todos <span class="contador-todos"><?php echo ' (' . $query->post_count . ')'; ?></span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-5" id="por-provincia-tab" data-bs-toggle="tab"
                                data-bs-target="#por-provincia-tab-pane" type="button" role="tab"
                                aria-controls="por-provincia-tab-pane" aria-selected="false">
                            Por provincia
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-5" id="mapa-tab" data-bs-toggle="tab"
                                data-bs-target="#mapa-tab-pane" type="button" role="tab"
                                aria-controls="mapa-tab-pane" aria-selected="false">
                            Ver mapa
                        </button>
                    </li>
                </ul>
                <div class="tab-content mb-3" id="tabSociosContent">
                    <div class="tab-pane fade show active p-5 bg-white shadow" id="todos-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0">
                        <form class="mb-5">
                            <input type="text" class="form-control-lg w-100" id="filtro-socios"
                                   placeholder="Ingrese texto, provincia, email o direccion del socio a buscar.....">
                        </form>
                        <div class="row position-relative g-5" id="listado-socios">

                            <?php

                            if ($query->have_posts()):
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    $provincia = get_field('provincia');
                                    if(strlen(trim($provincia)) !== 0){
                                        $slug_provincia = slugify($provincia);
                                        //$slug_provincia = preg_replace('/[^A-Za-z0-9-]+/', '-', mb_strtolower($provincia));
                                        $provincias[$slug_provincia] = $provincia;
                                    }
                                    ?>
                                    <div class="col-12 col-md-4 col-card-socio" data-provincia="<?php echo $slug_provincia; ?>">
                                        <?php
                                        include locate_template('partials/socio-horizontal2.php');
                                        /* https://developer.wordpress.org/reference/functions/wp_reset_postdata/ */
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade p-5 bg-white shadow" id="por-provincia-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0">
                        <div class="accordion accordion-flush" id="accordionSociosPorProvincia">
                            <?php
                            var_dump($provincias);
                            foreach ($provincias as $slug_provincia => $nom_provincia):
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header text-secondary" id="heading-<?php echo $slug_provincia; ?>">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $slug_provincia; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $slug_provincia; ?>">
                                            <?php echo $nom_provincia; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse-<?php echo $slug_provincia; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $slug_provincia; ?>" data-bs-parent="#accordionSociosPorProvincia">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade show p-5 bg-white shadow" id="mapa-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0">
                        mapa
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; ?>
</div>
<?php
get_footer();
?>
