<?php
$blog_heading = get_field('blog_heading');
$blog_intro = get_field('blog_intro');
$blog_button_text = get_field('blog_button_text');
$blog_button_url = get_field('blog_button_url');
?>

<section class="blog__slider">
    <div class="container">
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

                    <div class="d-flex justify-content-md-end justify-content-start">
                        <?php if($blog_button_url != null) { ?>
                        <a class="btn__primary" href="<?php echo $blog_button_url; ?>"><?php echo $blog_button_text; ?><i class="fa-solid fa-arrow-right pl-1 btn__primary__arrow"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="blog__slider__wrapper">
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

