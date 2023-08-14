<div class="blog__card">
    <a title="<?php echo the_title(); ?>" href="<?php echo the_permalink(); ?>">
        <img class="blog__card__image" src="<?php echo the_post_thumbnail_url("post"); ?>" alt="<?php echo the_title(); ?>">
        <div class="d-flex justify-content-between p-2">
            <div class="d-flex blog__card__author__section mt-1">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 52 );  ?>
                <p class="blog__card__author"><?php the_author(); ?></p>
            </div>
            <div class="d-flex mt-1">
                <i class="fa-solid fa-clock blog__card__clock"></i>
                <p class="blog__card__date"><?php echo get_the_date(); ?></p>
            </div>
        </div>
        <div class="blog__card__main pb-4">
            <h4 class="blog__card__headin mb-3"><?php echo the_title(); ?></h4>
            <a title="<?php echo the_title(); ?>" class="btn__secondary effect mb-2" href="<?php echo the_permalink(); ?>">Read more</a>
        </div>
    </a>
</div>


