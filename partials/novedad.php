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
        <div class="small text-muted my-2 fst-italic">
            <?php echo get_the_date('d/m/Y H:i'); ?>&nbsp;Hs.
        </div>
        <div class="card-text text-navy">
            <?php echo the_excerpt(); ?>
        </div>
    </div>
    <div class="card-footer bg-light border-top-0 pb-3">
        <a href="<?php echo the_permalink(); ?>" class="btn btn-outline-primary stretched-link"
           data-bs-toggle="modal"
           data-bs-target="#staticBackdrop">
            <i class="fa-solid fa-plus"></i>&nbsp;Leer más
        </a>
    </div>
</div>
