<?php
/* Template Name: Projects */
get_header();
?>

<section class="projects__index" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg););">
    <div class="container">
        <?php include("inc/blocks/projects.php"); ?>
    </div>
</section>

<?php
include("inc/blocks/blog-slider.php");

get_footer(); ?>
