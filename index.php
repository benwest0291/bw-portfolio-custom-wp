<?php get_header();
$index_heading = get_field('blog_index_heading', 'option');
$index_content = get_field('blog_index_content', 'option');
$index_error_message = get_field('index_error_message', 'option');
?>

<section class="posts__index">
    <div class="container">
        <?php if($index_heading != null) { ?>
            <h1 class="posts__index__heading mb-3"><?php echo $index_heading; ?></h1>
        <?php } ?>

        <?php if($index_content != null) { ?>
            <p class="posts__index__content mb-3"><?php echo $index_content; ?></p>
        <?php } ?>
            <div class="post__index__main">
                <div class="row">
                    <?php if ( have_posts() ) { ?>
                        <?php while ( have_posts() ) {
                            the_post(); ?>
                                <div class="col-12 col-lg-6 col-xl-4">
                                    <?php get_template_part("inc/partials/blog-card"); ?>
                                </div>
                        <?php }
                        } else { ?>
                            <div class="mt-md-4 mb-4">
                                <?php if($index_error_message != null){ ?>
                                    <h5 class="posts__index__error mb-4"><?php echo $index_error_message; ?></h5>
                                <?php } else { ?>
                                    <h5 class="posts__index__error mb-4">Whoops! Sorry, That was not supposed to happen</h5>
                                <?php } ?>
                                <a title="Ben West dev homepage" class="btn__primary" href="<?php echo site_url("/") ?>">Return to homepage</a>
                            </div>
                        <?php
                        };
                    ?>
                </div>
            </div>
        <?php echo paginate_links(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>




