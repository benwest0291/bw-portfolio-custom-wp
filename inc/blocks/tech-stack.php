<?php
$tech_stack_heading = get_field('tech_stack_heading');
$images = get_field('tech_stack_images');
?>
<section class="tech__stack">
    <div class="container">
        <?php if($tech_stack_heading != null) { ?>
            <h3 class="tech__stack__heading mb-4"><?php echo $tech_stack_heading; ?></h3>
        <?php } ?>
        <div class="tech__stack__bubble">
            <?php if( $images != null ) { ?>
                <div class="d-flex justify-content-between justify-content-md-evenly justify-content-lg-between flex-wrap">
                    <?php foreach( $images as $image ) { ?>
                        <img class="tech__stack__image m-1" src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
