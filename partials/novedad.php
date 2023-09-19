<div class="card text-bg-light shadow rounded-top-3">
    <?php
    if (has_post_thumbnail()):
        echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top img-fluid object-fit-cover rounded-top-3'));
    endif;
    ?>
    <div class="card-body">
        <h5 class="card-title text-black">
            <?php echo the_title(); ?>
        </h5>
        <div class="small text-muted my-2 fst-italic">
            <?php echo get_the_date('d/m/Y H:i'); ?>&nbsp;Hs.
        </div>
        <div class="small card-text text-navy">
            <?php echo the_excerpt(); ?>
        </div>
    </div>
    <div class="card-footer bg-light border-top-0 pb-3 rounded-bottom-3">
        <a href="<?php echo the_permalink(); ?>" class="btn btn-outline-primary stretched-link"
           data-titulo="<?php echo the_title(); ?>">
            <i class="fa-solid fa-plus"></i>&nbsp;Leer más
        </a>
    </div>
</div>
