<?php
// echo the_content();
$titulo = get_the_title();
$razon_social = get_field('razon_social');
$email = get_field('correo_electronico');
$telefono = get_field('telefono');
$direccion = ucwords(mb_strtolower(get_field('direccion')));
$localidad = get_field('localidad');
$tiene_img = has_post_thumbnail();
global $provincia;
?>
<div class="card text-bg-light shadow card-socio border-silver h-100" style="min-height: 10rem;">
    <div class="card-body bg-light h-100">
        <div class="row h-100">
            <div class="col-md-5 py-0 h-100 align-self-center">
                <?php
                if (has_post_thumbnail()):
                    echo get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'img-fluid rounded align-middle shadow-sm h-100'));
                else:
                    ?>
                    <img src="https://fakeimg.pl/700x700?text=Logo" class="img-fluid rounded align-middle shadow-sm h-100"/>
                <?php endif; ?>
            </div>
            <div class="col-md-7 ps-0 h-100 align-self-baseline">
                <div class="card-title fw-bold text-uppercase text-navy mb-0 pb-0 h-100 searchable-text">
                    <?php
                    echo $titulo;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <ul class="list-group list-group-flush small border-light px-3 pt-1 pb-2">

        <li class="list-group-item text-<?php echo ($email ? 'muted' : 'silver'); ?> border-light rounded mb-2 shadow-sm">
            <i class="fa-solid fa-envelope"></i>&nbsp;<span class="searchable-text">
                <?php echo ($email ?: 'Sin definir'); ?>
            </span>
        </li>

        <li class="list-group-item text-<?php echo ($telefono ? 'muted' : 'silver'); ?> border-light rounded shadow-sm">
            <i class="fa-solid fa-phone"></i>&nbsp;<span class="searchable-text">
                <?php echo ($telefono ?: 'Sin definir'); ?>
            </span>
        </li>
    </ul>
    <div class="card-footer bg-light border-light px-3 d-flex justify-content-between">
        <a class="btn btn-sm btn-navy stretched-link modal-info-socios" data-titulo="<?php echo $titulo; ?>"
           data-email="<?php echo $email; ?>"
           data-telefono="<?php echo $telefono; ?>"
           data-direccion="<?php echo $direccion; ?>"
           data-localidad="<?php echo $localidad; ?>"
           data-provincia="<?php echo $provincia; ?>">
            <i class="fa-solid fa-circle-info"></i>&nbsp;M&aacute;s info ...
        </a>
        <div class="small text-end text-muted d-block fst-italic">
            <span class="align-middle">
                <i class="fa-solid fa-map-marker"></i>&nbsp;<span class="searchable-text"><?php echo ($provincia ?: 'Sin definir'); ?></span>
            </span>
        </div>
    </div>
</div>

