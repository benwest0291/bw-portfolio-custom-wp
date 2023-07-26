<?php
get_header();
$tech_images = get_field('tech_stack');
$code_link = get_field('code_link');
$figma_link = get_field('figma_link');
$project_link = get_field('project_link');
?>

<section class="project">
    <div class="container">
        <div class="project__header">
            <h1 class="project__heading mb-2 mb-md-4"><?php the_title(); ?></h1>
            <div class="project__links mb-md-4">
                <div class="d-flex justify-content-between flex-column flex-lg-row mb-md-4">
                    <?php if ($project_link != null){ ?>
                        <a class="btn__primary mb-1" href="<?php echo $project_link;?>" target="_blank">View Site<i class="fa-solid fa-arrow-right pl-1 btn__primary__arrow"></i></a>
                    <?php } ?>

                    <?php if ($code_link != null){ ?>
                         <a class="btn__secondary mb-1" href="<?php echo $code_link; ?>" target="_blank">View Code<i class="fa-brands fa-github btn__secondary__github"></i></a>
                    <?php } ?>

                    <?php if ($figma_link != null){ ?>
                        <a class="btn__third mb-1" href="<?php echo $figma_link; ?>" target="_blank">View Design<i class="fa-brands fa-figma pl-1 btn__third__figma"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7">
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-12 col-md-5">
                    <img class="project__bg position-absolute d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg);" alt="background image rays" />
                    <img class="project__image position-relative" src="<?php echo the_post_thumbnail_url("post"); ?>">
                </div>
            </div>

            <h3 class="project__tech__stack__heading">Tech Stack</h3>
            <div class="project__tech__stack mt-3 mt-md-5">
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
include("inc/blocks/blog-slider.php");
get_footer();
