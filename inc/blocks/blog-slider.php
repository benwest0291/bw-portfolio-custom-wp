<?php
$blog_heading = get_field('blog_heading', 'option');
$blog_intro = get_field('blog_intro', 'option');
$blog_button_text = get_field('blog_button_text', 'option');
$blog_button_url = get_field('blog_button_url', 'option');
?>

<section class="blog__slider">
    <div class="container">
        <?php if (!is_single()) { ?>
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php if($blog_heading != null) { ?>
                        <h3 class="blog__slider__heading mb-3"><?php echo $blog_heading; ?></h3>
                    <?php } ?>

                    <?php if($blog_heading) { ?>
                        <p><?php echo $blog_intro; ?></p>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-start mt-2">
                            <?php if($blog_button_url != null) { ?>
                            <a title="<?php echo $blog_button_text; ?>"  class="btn__primary" href="<?php echo $blog_button_url; ?>"><?php echo $blog_button_text; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <div class="blog__slider__wrapper mt-2">
            <div class="slider">
                <?php
                    $posts = new WP_Query(array(
                        "posts_per_page" => 10,
                        "post_type" => "post",
                        "orderby" => "meta_value_num",
                        "order" => "ASC"
                    ));
                    while ($posts->have_posts()) {
                        $posts->the_post(); ?>
                        <div>
                            <?php get_template_part("inc/partials/blog-card"); ?>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

