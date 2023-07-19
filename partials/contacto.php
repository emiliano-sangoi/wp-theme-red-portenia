<!--<div class="card text-bg-light shadow">-->
<?php
if (has_post_thumbnail()):
    echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover'));
endif;
?>
<h2 class="card-title py-2">
    Encontranos!
</h2>
<?php 
$calle = get_field('calle', $post);
$localidad = get_field('localidad', $post);
$codPostal = get_field('codigo_postal', $post);
$correo = get_field('correo_electronico', $post);
$telefono = get_field('telefonos', $post);
?>
<div class="mb-1 mb-lg-1">

    <table>
        <tr>
            <td class="text-center">
                <i class="fa-solid fa-location-dot"></i>
            </td>
            <td class="ps-2 py-1">
                <?php
                echo nl2br($calle);
                ?> 
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <i class="fa-solid fa-map-location-dot"></i>
            </td>
            <td class="ps-2 py-1">
                <?php
                echo nl2br('CP ' . $codPostal . ', ' . $localidad);
                ?> 
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <i class="fa-regular fa-envelope"></i>
            </td>
            <td class="ps-2 py-1">
                <?php
                echo nl2br($correo);
                ?> 
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <i class="fa-solid fa-phone"></i>
            </td>
            <td class="ps-2 py-1">
                <?php
                echo nl2br($telefono);
                ?> 
            </td>
        </tr>
    </table>    
</div>
