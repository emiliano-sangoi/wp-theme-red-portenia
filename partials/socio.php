<div class="card text-bg-light shadow">
    <?php
    if (has_post_thumbnail()):
        echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover'));
    endif;
    ?>
    <div class="card-body">
        <div class="card-text text-navy">
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
<?php // echo the_excerpt();  ?>
            
        <table>
<!--            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-location-dot"></i>
                </td>
                <td class="ps-2 py-1" >
                    <?php
//                    echo '<span style="color:red">' . nl2br($nombre_fantasia) . '</span>' ;
                    ?> 
                </td>
            </tr>-->
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-user"></i>
                </td>
                <td class="ps-2 py-1">
                    <?php
                    echo nl2br($razon_social);
                    ?> 
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-location-dot"></i>
                </td>
                <td class="ps-2 py-1">
                    <?php
                    echo nl2br($correo_electronico);
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
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-location-dot"></i>
                </td>
                <td class="ps-2 py-1">
                    <?php
                    echo nl2br($direccion);
                    ?> 
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <i class="fa-solid fa-map-location-dot"></i>
                </td>
                <td class="ps-2 py-1">
                    <?php
                    echo nl2br($localidad.', '.$provincia);
                    ?> 
                </td>
            </tr>

        </table>    
    </div>
    </div>
</div>

