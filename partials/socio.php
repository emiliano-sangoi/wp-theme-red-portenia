<?php
// echo the_content();
$nombre_fantasia = get_field('nombre_fantasia', $post);
$razon_social = get_field('razon_social', $post);
$correo_electronico = get_field('correo_electronico', $post);
$telefono = get_field('telefono', $post);
$direccion = get_field('direccion', $post);
$localidad = get_field('localidad', $post);
$provincia = get_field('provincia', $post);
?>
<div class="card text-bg-light shadow-sm card-socio">
    <?php
    if (has_post_thumbnail()):
        echo get_the_post_thumbnail(null, 'post-thumbnail', array('class' => 'card-img-top img-fluid'));
    endif;
    ?>
    <div class="card-body">
        <div class="card-title fw-bold text-primary">
            <?php
                echo $razon_social;
            ?>
        </div>
        <div class="card-text text-navy">
        <table>
            <?php if ($correo_electronico) : ?>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-envelope              "></i>
                </td>
                <td class="ps-2 py-1 searchable-text searchable-text">
                    <?php
                    echo $correo_electronico;
                    ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if ($telefono) : ?>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-phone"></i>
                </td>
                <td class="ps-2 py-1 searchable-text searchable-text">
                    <?php
                    echo $telefono;
                    ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if ($direccion) : ?>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-location-dot"></i>
                </td>
                <td class="ps-2 py-1 searchable-text">
                    <?php
                    echo $direccion;
                    ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if ($localidad) : ?>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-map-location-dot"></i>
                </td>
                <td class="ps-2 py-1 searchable-text">
                    <?php
                    echo $localidad;
                    ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if ($provincia) : ?>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-city"></i>
                </td>
                <td class="ps-2 py-1 searchable-text">
                    <?php
                        echo $provincia;
                    ?>
                </td>
            </tr>
            <?php endif; ?>

        </table>
    </div>
    </div>
</div>

