<a href="<?php echo the_permalink(); ?>">
    <div class="blog__card">
        <img class="blog__card__image" src="<?php echo the_post_thumbnail_url("post"); ?>">
        <div class="d-flex justify-content-between p-2">
            <div class="d-flex blog__card__author__section">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 52 );  ?>
                <p class="blog__card__author"><?php the_author(); ?></p>
            </div>
            <div class="d-flex">
                <i class="fa-solid fa-clock blog__card__clock"></i>
                <p class="blog__card__date"><?php echo get_the_date(); ?></p>
            </div>
        </div>
        <div class="blog__card__main pb-2">
            <h2 class="blog__card__heading"><?php echo the_title(); ?></h2>
            <a class="blog__card__link" href="<?php echo the_permalink(); ?>">Read more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</a>

