<?php
$tech_images = get_field('tech_stack');
?>

<div class="project__card pt-2">
    <div class="row">
        <div class="col-12 col-md-6">
            <h2 class="project__card__heading"><?php the_title(); ?></h2>
            <p class="project__card__content mt-4 mb-3"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                <div class="project__card__tech__container mb-2">
                    <?php if( $tech_images != null ) { ?>
                        <div class="d-flex justify-content-between flex-wrap">
                            <?php foreach( $tech_images as $tech_image ) { ?>
                                <img class="project__card__tech" src="<?php echo $tech_image['url']; ?>" alt="<?php echo esc_attr($tech_image['alt']); ?>" />
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <a class="btn__secondary" href="<?php echo the_permalink(); ?>">View project</a>
        </div>
        <div class="col-12 col-md-6">
            <div class="d-flex justify-content-end">
                <img class="project__card__image" src="<?php echo the_post_thumbnail_url("post"); ?>">
            </div>
        </div>
    </div>
</div>
