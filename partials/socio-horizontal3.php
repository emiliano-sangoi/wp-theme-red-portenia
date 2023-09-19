<?php
// echo the_content();
$titulo = get_the_title();
$razon_social = get_field('razon_social');
$email = get_field('correo_electronico');
$telefono = get_field('telefono');
$direccion = ucwords(mb_strtolower(get_field('direccion')));
$localidad = get_field('localidad');
$website = get_field('website');
$sucursales = get_field('sucursales');
$tiene_img = has_post_thumbnail();
global $provincia;
?>
<div class="card rounded-3 shadow card-socio h-100"
     style="min-height: 9rem;"
     data-bs-toggle="tooltip"
     data-bs-placement="bottom"
     data-bs-html="true"
     data-bs-title="<h6><?php echo $titulo . mb_strtoupper($provincia ? ' (' . $provincia . ')' : ''); ?></h6><p>Hace click en la imágen para ver mas datos!</p>">
    <div class="card-body rounded-3 border border-silver h-100 p-0 align-self-center p-2" style="border-bottom-left-radius: 0 !important; border-bottom-right-radius: 0 !important;">
        <?php
        if (has_post_thumbnail()):
            echo get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'img-fluid rounded-3 align-middle w-100 h-100'));
        else:
            ?>
            <img src="https://fakeimg.pl/700x700?text=Logo" class="img-fluid rounded-3 align-middle w-100 h-100"/>
        <?php endif; ?>
    </div>
    <span class="d-none searchable-text"><?php echo $titulo; ?></span>
    <span class="d-none searchable-text"><?php echo $provincia; ?></span>
    <span class="d-none searchable-text"><?php echo $localidad; ?></span>

    <div class="card-footer bg-navy border-primary border-top-0 p-0 rounded-top-0">
        <a class="btn btn-navy w-100 rounded-0 rounded-bottom stretched-link modal-info-socios" data-titulo="<?php echo $titulo; ?>"
           data-email="<?php echo $email; ?>"
           data-telefono="<?php echo $telefono; ?>"
           data-direccion="<?php echo $direccion; ?>"
           data-localidad="<?php echo $localidad; ?>"
           data-provincia="<?php echo $provincia; ?>"
           data-sucursales="<?php echo nl2br($sucursales); ?>"
           data-website="<?php echo $website; ?>">
            <i class="fa-solid fa-circle-info"></i>&nbsp;M&aacute;s info ...
        </a>
    </div>
</div>

