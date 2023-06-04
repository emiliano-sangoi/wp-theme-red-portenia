<?php
// echo the_content();
$nombre_fantasia = get_field('nombre_fantasia', $post);
$razon_social = get_field('razon_social', $post);
$correo_electronico = get_field('correo_electronico', $post);
$telefono = get_field('telefono', $post);
$direccion = get_field('direccion', $post);
$localidad = get_field('localidad', $post);
$provincia = get_field('provincia', $post);
$tiene_img = has_post_thumbnail();
?>
<div class="card text-bg-light shadow-sm card-socio position-relative">
    <div class="row g-0">
        <div class="col-md-2 p-1 align-self-center">
            <?php
            if (has_post_thumbnail()):
                echo get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'img-fluid rounded align-middle'));
            else:
                ?>
                <img src="https://fakeimg.pl/700x700" class="img-fluid rounded align-middle"/>
            <?php endif; ?>
        </div>
        <div class="col-md-10">
            <div class="card-body text-navy">
                <div class="card-title fw-bold fs-5 text-primary searchable-text">
                    <?php
                        echo $razon_social;
                    ?>
                </div>
                <table class="mb-0">
                        <tr>
                            <?php if ($correo_electronico) : ?>
                            <td class="text-start py-2">
                                <i class="fa-solid fa-envelope"></i>&nbsp;<span class="searchable-text"><?php echo $correo_electronico; ?></span>
                            </td>
                            <?php endif; ?>
                            <?php if ($telefono) : ?>
                                <td class="text-start py-2 ps-3">
                                    <i class="fa-solid fa-phone"></i>&nbsp;<span class="searchable-text"><?php echo $telefono; ?></span>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <tr>
                        <?php if ($direccion) : ?>
                            <td class="text-start py-2 ">
                                <i class="fa-solid fa-location-dot"></i>&nbsp;<span class="searchable-text"><?php echo $direccion; ?></span>
                            </td>
                        <?php endif; ?>
                        <?php if ($localidad) : ?>
                            <td class="text-start py-2 ps-3">
                                <i class="fa-solid fa-city"></i>&nbsp;<span class="searchable-text"><?php echo $localidad . ', ' .$provincia; ?></span>
                            </td>
                        <?php endif; ?>
                    </tr>
                </table>
            </div>
<!--            <div class="card-footer bg-transparent border-top-0 position-absolute" style="bottom: 0">-->
<!--                <a class="btn btn-sm btn-outline-navy stretched-link">-->
<!--                    Ver m&aacute;s info-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</div>

