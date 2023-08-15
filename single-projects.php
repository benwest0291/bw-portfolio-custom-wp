<?php
get_header();
$tech_images = get_field('tech_stack');
$code_link = get_field('code_link');
$project_link = get_field('project_link');
?>

<section class="project">
    <div class="container">
        <div class="project__header">
            <h1 class="project__heading mb-2 mb-md-4"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-md-4">
                        <?php if ($project_link != null){ ?>
                            <a title="Project link" class="btn__primary project__link mb-1" href="<?php echo $project_link;?>" target="_blank">View Site</a>
                        <?php } ?>

                        <?php if ($code_link != null){ ?>
                            <a title="Code link" class="btn__secondary project__link mb-1" href="<?php echo $code_link; ?>" target="_blank">View Code</a>
                        <?php } ?>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="col-12 col-md-5 ">
                    <img class="project__bg position-absolute d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg);" alt="background image rays" />
                    <div class="project__screenshot__container">
                        <img class="project__screenshot" src="<?php echo the_post_thumbnail_url("post"); ?>" alt="<?php echo the_title(); ?>">
                    </div>
                </div>
            </div>

            <h3 class="project__tech__stack__heading">Tech Stack Used</h3>
            <div class="project__tech__stack mt-3 mb-md-0 mb-3 mt-md-5">
                <?php if( $tech_images != null ) { ?>
                    <div class="d-flex justify-content-between flex-wrap">
                        <?php foreach( $tech_images as $tech_image ) { ?>
                            <img class="project__tech__stack__image m-1" src="<?php echo $tech_image['url']; ?>" alt="<?php echo esc_attr($tech_image['alt']); ?>" />
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php

include("inc/blocks/project-slider.php");

get_footer();


