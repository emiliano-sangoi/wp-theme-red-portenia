<?php
// echo the_content();
$nombre_fantasia = get_field('nombre_fantasia');
$razon_social = get_field('razon_social');
$correo_electronico = get_field('correo_electronico');
$telefono = get_field('telefono');
$direccion = get_field('direccion');
$localidad = get_field('localidad');
$tiene_img = has_post_thumbnail();


?>
<div class="card text-bg-light shadow-sm card-socio h-100" style="min-height: 10rem;">
    <div class="card-body text-navy h-100">
        <div class="row">
            <div class="col-md-4 py-0">
                <?php
                if (has_post_thumbnail()):
                    echo get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'img-fluid rounded align-middle'));
                else:
                    ?>
                    <img src="https://fakeimg.pl/700x700?text=Logo" class="img-fluid rounded align-middle"/>
                <?php endif; ?>
            </div>
            <div class="col-md-8 ps-0">
                <div class="card-title fw-bold text-uppercase text-secondary mb-0 pb-0 h-100 searchable-text">
                    <?php
                    echo $razon_social;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a class="btn btn-sm btn-outline-primary stretched-link">
            <i class="fa-solid fa-circle-info"></i>&nbsp;M&aacute;s info
        </a>
    </div>
</div>

