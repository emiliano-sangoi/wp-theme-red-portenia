<?php
/* Template Name: Sobre Nosotros */

get_header();
?>
<div class="py-5 bg-light" id="sobre-nosotros">
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
                <main>
                    <div class="container py-5">

                        <?php
                            $custom_fields = get_fields(get_the_ID());
                        ?>

                        <ul class="nav nav-tabs nav-justified " id="tabSobreNosotros" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active fs-5" id="vmo-tab" data-bs-toggle="tab"
                                        data-bs-target="#vmo-tab-pane" type="button" role="tab" aria-controls="vmo-tab-pane"
                                        aria-selected="true">
                                    Misi&oacute;n, Visi&oacute;n y Objetivos
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-5" id="valores-tab" data-bs-toggle="tab"
                                        data-bs-target="#valores-tab-pane" type="button" role="tab"
                                        aria-controls="valores-tab-pane" aria-selected="false">
                                    Valores
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-5" id="historia-tab" data-bs-toggle="tab"
                                        data-bs-target="#historia-tab-pane" type="button" role="tab"
                                        aria-controls="historia-tab-pane" aria-selected="false">
                                    Historia
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mb-3" id="tabSobreNosotrosContent">
                            <div class="tab-pane fade show active p-5 bg-white shadow" id="vmo-tab-pane" role="tabpanel"
                                 aria-labelledby="vmo-tab" tabindex="0">
                                <div class="row mb-4">
                                    <div class="col col-md-2 text-center">
                                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>"
                                             class="img-fluid w-75">
                                    </div>
                                    <div class="col col-md-10 col-lg-9 align-self-center lead">
                                        <?php
                                        echo $custom_fields['mision'] ?? '';
                                        ?>
                                    </div>
                                </div>
                                <div class="row mb-4 py-3">
                                    <div class="col col-md-2 text-center">
                                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/vision.png'; ?>"
                                             class="img-fluid w-75">
                                    </div>
                                    <div class="col col-md-10 col-lg-9 align-self-center lead">
                                        <?php
                                        echo $custom_fields['vision'] ?? '';
                                        ?>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col col-md-2 text-center">
                                        <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/target.png'; ?>"
                                             class="img-fluid w-75">
                                    </div>
                                    <div class="col col-md-10 col-lg-9 align-self-center lead">
                                        <?php
                                        echo $custom_fields['objetivos'] ?? '';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-5 bg-white shadow" id="valores-tab-pane" role="tabpanel"
                                 aria-labelledby="valores-tab" tabindex="0">
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
                                            <?php echo isset($custom_fields['espiritu_equipo']) ? nl2br($custom_fields['espiritu_equipo']) : ''; ?>
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
                            <div class="tab-pane fade p-5 bg-white shadow" id="historia-tab-pane" role="tabpanel"
                                 aria-labelledby="historia-tab" tabindex="0">
                                <?php echo isset($custom_fields['historia']) ? nl2br($custom_fields['historia']) : ''; ?>
                            </div>
                        </div>
                    </div>
                </main>
            <?php endwhile; ?>
        <?php endif; ?>
</div>
<?php get_footer(); ?>
