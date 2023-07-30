<?php get_header(); ?>

<section class="error" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg););">
    <div class="container">
        <div class="d-flex justify-content-center flex-column">
            <h6 class="error__heading text-center">404 ERROR</h6>
            <h2 class="error__subheading text-center">Whoops, this wasn’t supposed to happen 😱</h2>
            <div class="d-flex justify-content-center mt-5">
                <a title="Ben West dev homepage" class="btn__primary" href="<?php echo site_url("/") ?>">Back to homepage</a>
            </div>
        </div>
    </div>
</section>

<?php
include("inc/blocks/blog-slider.php");
get_footer();?>
