<?php
$icon = get_sub_field('icon');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
?>

<div class="service__card">
    <?php if ($icon != null ){ ?>
        <img src="<?php echo $icon['url']; ?>">
    <?php } ?>

    <?php if ($heading != null ){ ?>
        <h3 class="service__card__heading"><?php echo $heading; ?></h3>
    <?php } ?>

    <?php if ($content != null ){ ?>
        <p><?php echo $content; ?></p>
    <?php } ?>
</div>
