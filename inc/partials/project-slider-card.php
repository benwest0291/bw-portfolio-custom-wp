<?php
$screenshot = get_field('project_screenshot');
?>

<div class="project__slider__card">
    <a title="<?php echo the_title(); ?>" href="<?php echo the_permalink(); ?>">
        <?php if($screenshot != null) { ?>
            <img class="project__slider__card__image" src="<?php echo $screenshot['url']; ?>" alt="<?php echo $screenshot['alt']; ?>" >
        <?php } ?>
        <div class="project__slider__card__main mt-3 pb-2">
            <h4 class="project__slider__card__heading mb-2"><?php echo the_title(); ?></h4>
            <a title="<?php echo the_title(); ?>" class="btn__secondary effect mb-3" href="<?php echo the_permalink(); ?>">View project</a>
        </div>
    </a>
</div>
