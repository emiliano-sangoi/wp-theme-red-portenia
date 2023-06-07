<div class="card text-bg-light shadow">
    <?php
    if (has_post_thumbnail()):
        echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover'));
    endif;
    ?>
    <div class="card-body">
        <h5 class="card-title text-black">
            <?php echo the_title(); ?>
        </h5>
        <div class="card-text text-navy">
            <?php // echo the_content(); 
                $calle = get_field('calle', $post);
                $localidad = get_field('localidad', $post);
                $codPostal = get_field('codigo_postal', $post);
                $correo = get_field('correo_electronico', $post);
                $telefono = get_field('telefonos', $post);
            ?>
        </div>
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
                         echo nl2br('CP '.$codPostal. ', '.$localidad);
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
    </div>

</div>
