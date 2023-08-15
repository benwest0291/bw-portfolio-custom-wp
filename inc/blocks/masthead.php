<?php
$masthead_top_heading = $data['masthead_top_heading'];
$masthead_main_heading = $data['masthead_main_heading'];
$masthead_content = $data['masthead_content'];
$masthead_image = $data['masthead_image'];
$masthead_button_one_text = $data['masthead_button_one_text'];
$masthead_button_one_link = $data['masthead_button_one_link'];
$masthead_button_two_text = $data['masthead_button_two_text'];
$masthead_button_two_link = $data['masthead_button_two_link'];
?>

<section class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <?php if ($masthead_top_heading != null){ ?>
                    <h1 class="masthead__top__heading"><?php echo $masthead_top_heading; ?></h1>
                <?php } ?>

                <?php if ($masthead_main_heading != null){ ?>
                    <?php echo $masthead_main_heading; ?>
                <?php } ?>

                <?php if ($masthead_content != null){ ?>
                    <p class="masthead__content mt-3"><?php echo $masthead_content; ?></p>
                <?php } ?>

                <div class="masthead__btns__container mt-4">
                    <div class="">
                        <?php if ($masthead_button_one_text && $masthead_button_one_link != null){ ?>
                            <a title="<?php echo $masthead_button_one_text; ?>" href="<?php echo $masthead_button_one_link; ?>" class="btn__primary masthead__btn"><?php echo $masthead_button_one_text; ?></a>
                        <?php } ?>

                        <?php if ($masthead_button_two_text && $masthead_button_two_link != null){ ?>
                            <a title="<?php echo $masthead_button_two_text; ?>" href="<?php echo $masthead_button_two_link; ?>" class="btn__secondary masthead__btn"><?php echo $masthead_button_two_text; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <img class="masthead__bg position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg);" alt="background image rays" />
                <?php if ($masthead_image != null){ ?>
                    <img class="masthead__image position-relative" src="<?php echo $masthead_image['url']; ?>" alt="<?php echo esc_attr($masthead_image['alt']); ?>"  />
                <?php } ?>
            </div>
        </div>
    </div>
</section>
