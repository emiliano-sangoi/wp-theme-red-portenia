<div class="card text-bg-light shadow">
    <?php
    if (has_post_thumbnail()):
        echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover'));
    endif;
    ?>
    <div class="card-body">
        <h5 class="card-title text-primary">
            <?php echo the_title(); ?>
        </h5>
        <div class="card-text text-navy">
            <?php // echo the_content(); ?>
        </div>
        <div class="mb-1 mb-lg-1">
            <p class="card-text">
                <?php
                $calle = get_field('calle', $post);
                $localidad = get_field('localidad', $post);
                $codPostal = get_field('codigo_postal', $post);
                $correo = get_field('correo_electronico', $post);
                $telefono = get_field('telefonos', $post);

                echo nl2br($calle);
                ?>  
                </br>
                <?php
                echo nl2br('('.$codPostal. ') - '.$localidad);
                ?>  
                </br>
                <?php
                echo nl2br($correo);
                ?>  
                </br>
                <?php
                echo nl2br($telefono);
                ?>  
            </p>
        </div>
    </div>

</div>
