<?php
$screenshot = get_field('project_screenshot');
?>

<div class="project__slider__card">
    <a title="<?php echo the_title(); ?>" href="<?php echo the_permalink(); ?>">
        <?php if($screenshot != null) { ?>
            <img class="project__slider__card__image" src="<?php echo $screenshot['url']; ?>" alt="<?php echo $screenshot['alt']; ?>" >
        <?php } ?>
        <div class="project__slider__card__main mt-3 pb-4">
            <h4 class="project__slider__card__heading mb-3"><?php echo the_title(); ?></h4>
            <a title="<?php echo the_title(); ?>" class="btn__secondary effect mt-2 mb-3" href="<?php echo the_permalink(); ?>">View project<span class="project__slider__card__reader__text">Read more</span></a>
        </div>
    </a>
</div>
