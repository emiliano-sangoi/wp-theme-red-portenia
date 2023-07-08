<!-- Footer-->
<footer class="footer bg-light">
    <?php
    $id_cat = get_cat_id(RPT_CATEGORIA_OFICINAS);
    if ($id_cat) {
        $args_otros = array('category' => $id_cat, 'posts_per_page' => -1, 'post_status' => 'publish');
        $post_oficinas = get_posts($args_otros);
    }
    ?>
    <div class="py-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center">
                <?php if (isset($post_oficinas[0])): ?>
                    <?php
                    foreach ($post_oficinas as $post):
                        ?>
                        <div class="col col-lg-3 align-self-start text-start">
                            <h6 class="text-light mb-3"> <?php echo the_title(); ?></h6>
                            <address class="text-light">
                                <table>
                                    <tr>
                                        <td class="text-center py-1">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </td>
                                        <td class="ps-2 py-1">
                                            <?php
                                            echo nl2br(get_field('calle', $post));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center py-1">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </td>
                                        <td class="ps-2 py-1">
                                            <?php
                                            echo nl2br('CP ' . get_field('codigo_postal', $post) . ', ' . get_field('localidad', $post));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center py-1">
                                            <i class="fa-regular fa-envelope"></i>
                                        </td>
                                        <td class="ps-2 py-1">
                                            <a href="mailto:comercial2@redportena.com.ar"
                                               class="text-light text-decoration-none">
                                                   <?php
                                                   echo nl2br(get_field('correo_electronico', $post));
                                                   ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center py-1">
                                            <i class="fa-solid fa-phone"></i>
                                        </td>
                                        <td class="ps-2 py-1">
                                            <?php
                                            echo nl2br(get_field('telefonos', $post));
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </address>
                        </div>
                        <?php
                    endforeach;
                    ?>
                <?php endif; ?>
                <div class="col-lg-6 text-lg-start align-self-start">
                    <iframe class="w-100 rounded" height="300"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.817253841684!2d-61.5084177!3d-31.225792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95caae00a9e3f68f%3A0x49f2714d1610ceb9!2sRED%20PORTE%C3%91A%20SA!5e0!3m2!1sen!2sar!4v1685492620983!5m2!1sen!2sar"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                 <!--src=" <?php // echo redOptGetUrlMapaDireccion(); ?>"-->
            </div>
        </div>
    </div>

    <div class="py-3 bg-black text-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-lg-start">
                    Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
                </div>
                <?php
                    $ig = redOptGetInstagram();;
                    $fb =  redOptGetFacebook();
                    $ld =  redOptGetLinkedin();
                ?>
                <div class="col-lg-6 text-lg-end">
                    <?php if($ig) : ?>
                    <a class="btn btn-primary btn-social me-1" href="<?php echo $ig;?>" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <?php endif; ?>
                    <?php if($fb) : ?>
                    <a class="btn btn-primary btn-social me-1" href="<?php echo $fb;?>" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i>
                    </a>
                    <?php endif; ?>
<!--                    <a class="btn btn-primary btn-social me-1" href="" aria-label="Twitter"><i
                            class="fab fa-twitter"></i>
                    </a>-->
                    <?php if($ld) : ?>
                    <a class="btn btn-primary btn-social" href="<?php echo $ld; ?>" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="<?php echo site_url('/' . PAGINA_SUMATE); ?>" class="btn btn-red rounded-circle grow"
   style="position: fixed; right: 1.5rem; bottom: 1.5rem;width: 5em; height: 5em;"
   data-bs-toggle="tooltip"
   data-bs-placement="left"
   data-bs-custom-class="custom-tooltip"
   data-bs-title="Sumate a la Red!">
    <i class="fas fa-plus text-silver h-100 w-100"></i>
</a>

<!-- Portfolio Modals-->
<div class="modal fade" id="faqSociosModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-uppercase">
                    <i class="fa-regular fa-circle-question"></i>
                    Preguntas frecuentes
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-3 px-lg-4 py-1">
                <div class="text-align-start mt-3">
                    <?php
                    $faqs_query = new WP_Query([
                        'category_name' => RPT_CATEGORIA_PREG_FREC,
                        'posts_per_page' => -1,
                        'post_status' => 'publish'
                    ]);

                    if ($faqs_query->have_posts()):
                        //var_dump($novedades);
                        while ($faqs_query->have_posts()) :
                            ?>
                            <div>
                                <?php
                                $faqs_query->the_post();
                                include locate_template('partials/pregunta-frecuente.php');
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
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="staticBackdropLabel">Noticia 1</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col col-md-4">
                        <img src="<?php echo RPT_THEME_DIR . '/assets/img/foto-ej-noticia.png' ?>"
                             class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col col-md-8">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper id dolor vitae
                            sollicitudin. Ut
                            malesuada et orci id dignissim. Donec bibendum eget purus ut suscipit. Etiam accumsan luctus
                            elit,
                            vitae molestie est dignissim vitae. Praesent ex arcu, laoreet sollicitudin pretium vel,
                            mattis nec
                            nisl. Donec sagittis libero sit amet magna feugiat, id molestie arcu luctus. Praesent velit
                            ligula,
                            bibendum ac turpis ac, pulvinar ullamcorper tortor. Suspendisse ultricies arcu mauris, vel
                            commodo
                            tellus rhoncus at. Integer non diam consectetur, pretium massa at, volutpat sem.
                            Pellentesque
                            habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                        <p class="fst-italic text-muted text-end">
                            Publicada el 23 de Mayo del 2023
                        </p>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal del mapa -->
<div class="portfolio-modal modal fade" id="faqMapaModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">

        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-uppercase">
                    <i class="fa fa-map-location-dot"></i>
                Encontra nuestros socios adheridos
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1itEERquXh_-E7YUJRtOLiCPviCYt1nc&ehbc=2E312F&z=6"-->
                <iframe src="<?php echo redOptGetUrlMapaSocios() ?>"
                        class="w-100 h-100 shadow rounded"></iframe>
            </div>
        </div>
    </div>
</div>

<?php
wp_footer();
?>
</body>
</html>
