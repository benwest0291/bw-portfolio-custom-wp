<?php
$about_heading = get_field('about_heading');
$about_content = get_field('about_content')
?>
<section class="about">
    <div class="container">
        <?php if($about_heading != null ) { ?>
            <h3 class="about__heading text-center mb-5"><?php echo $about_heading; ?></h3>
        <?php } ?>

        <?php if($about_content != null) { ?>
            <p class="about__content text-center"><?php echo $about_content; ?></p>
        <?php } ?>
    </div>
</section>
