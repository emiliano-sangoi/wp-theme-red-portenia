<?php
/* Template Name: Socios */
get_header();
?>
<div class="py-5 bg-light" id="socios">
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
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php the_title(); ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </header>
        <main>
                <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1itEERquXh_-E7YUJRtOLiCPviCYt1nc&ehbc=2E312F&z=6"
                        class="w-100 shadow " height="600"></iframe>


            <div class="container mt-5 pb-5">
                <div class="d-flex alert alert-light justify-content-between align-items-center shadow-sm border border-silver text-navy">

                    <p class="mb-0">
                        A continuaci&oacute;n te mostramos todos nuestos socios. Si deseas sumarte o tenes alguna duda podes revisar la seccion de preguntas frecuentes o escribirnos para evacuar tus dudas, estaremos respondiendo a la brevedad.
                    </p>


                    <a href="" class="btn btn-navy me-2">
                        <i class="fa-solid fa-2x fa-plus"></i>
                    </a>
                    <a href="#faqSociosModal" class="btn btn-navy me-2" data-bs-toggle="modal">
                        <i class="fa-solid fa-2x fa-question"></i>
                    </a>
                    <a href="<?php echo site_url('/' . PAGINA_CONTACTO); ?>" class="btn btn-navy">
                        <i class="fa-solid fa-envelope fa-2x"></i>
                    </a>


                </div>
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
                        <button class="nav-link active fs-4" id="todos-tab" data-bs-toggle="tab"
                                data-bs-target="#todos-tab-pane" type="button" role="tab" aria-controls="todos-tab-pane"
                                aria-selected="true">
                            Todos <span class="contador-todos"><?php echo ' (' . $query->post_count . ')'; ?></span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="por-provincia-tab" data-bs-toggle="tab"
                                data-bs-target="#por-provincia-tab-pane" type="button" role="tab"
                                aria-controls="por-provincia-tab-pane" aria-selected="false">
                            Por provincia
                        </button>
                    </li>
<!--                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-4" id="mapa-tab" data-bs-toggle="tab"
                                data-bs-target="#mapa-tab-pane" type="button" role="tab"
                                aria-controls="mapa-tab-pane" aria-selected="false">
                            Ver mapa
                        </button>
                    </li>-->
                </ul>
                <div class="tab-content mb-3" id="tabSociosContent">
                    <div class="tab-pane fade show active p-5 bg-white shadow border border-silver border-top-0" id="todos-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0">
                        <div class="mb-5 shadow-sm">
                            <input type="text" class="form-control-lg w-100 border border-silver" id="filtro-socios" style=""
                                   placeholder="Filtrar por nombre o provincia del socio a buscar.....">
                        </div>
<!--                        <div class="row position-relative g-4" id="listado-socios">-->
                        <div class="row row-cols-5 position-relative g-4" id="listado-socios">

                            <?php
                            $slugs = [];
                            if ($query->have_posts()):
                                $posts = $query->get_posts();
                                foreach ($posts as $post):
                                    $provincia = get_field('provincia');
                                    if(strlen(trim($provincia)) !== 0){
                                        $slug_provincia = slugify($provincia);
                                        $provincias[$slug_provincia] = $provincia;

                                        if(!in_array($slug_provincia, $slugs)) {
                                            $slugs[] = $slug_provincia;
                                        }
                                    }

                                    ?>
                                    <div class="col col-card-socio" data-provincia="<?php echo $slug_provincia; ?>">
                                        <?php
                                            include locate_template('partials/socio-horizontal3.php');
                                        ?>
                                    </div>
                                <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade p-5 bg-white shadow" id="por-provincia-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0" data-slugs="<?php echo htmlspecialchars(json_encode($slugs),ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="accordion shadow" id="accordionSociosPorProvincia">
                            <?php
                            foreach ($provincias as $slug_provincia => $nom_provincia):
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-<?php echo $slug_provincia; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $slug_provincia; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $slug_provincia; ?>" data-slug-provincia="<?php echo $slug_provincia; ?>">
                                            <?php echo $nom_provincia; ?>&nbsp;<span class="contador-<?php echo $slug_provincia; ?>"></span>
                                        </button>
                                    </h2>
                                    <div id="collapse-<?php echo $slug_provincia; ?>" class="accordion-collapse collapse shadow-sm" aria-labelledby="heading-<?php echo $slug_provincia; ?>" data-bs-parent="#accordionSociosPorProvincia">
                                        <div class="accordion-body py-4">
                                            <div class="row row-cols-5 position-relative g-4 container-<?php echo $slug_provincia; ?>">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
<!--                    <div class="tab-pane fade show p-5 bg-white shadow" id="mapa-tab-pane" role="tabpanel"
                         aria-labelledby="vmo-tab" tabindex="0">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1itEERquXh_-E7YUJRtOLiCPviCYt1nc&ehbc=2E312F&z=7" class="w-100 shadow rounded-3 border border-silver" height="750"></iframe>
                    </div>-->
                </div>
            </div>
        </main>
    <?php endwhile; ?>
</div>
<?php
get_footer();
?>
