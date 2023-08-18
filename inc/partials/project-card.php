<?php
$tech_images = get_field('tech_stack');
?>

<div class="project__card mt-2">
    <a title="<?php echo the_title(); ?>" href="<?php echo the_permalink(); ?>">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7">
                <h2 class="project__card__heading"><?php the_title(); ?></h2>
                <p class="project__card__content mt-2 mt-md-2 mb-3"><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                    <div class="project__card__tech__container mb-2">
                        <?php if( $tech_images != null ) { ?>
                            <div class="d-flex justify-content-start justify-content-md-between flex-wrap">
                                <?php foreach( $tech_images as $tech_image ) { ?>
                                    <img class="project__card__tech" src="<?php echo $tech_image['url']; ?>" alt="<?php echo esc_attr($tech_image['alt']); ?>" />
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <a title="<?php echo the_title(); ?>" class="btn__secondary effect" href="<?php echo the_permalink(); ?>">View project<span class="project__card__reader__text">View project</span></a>
            </div>
            <div class="col-12 col-lg-5">
                <div class="project__card__screenshot__container">
                    <img class="project__card__screenshot" src="<?php echo the_post_thumbnail_url("post"); ?>" alt="<?php echo the_title(); ?>">
                </div>
            </div>
        </div>
    </a>
</div>

