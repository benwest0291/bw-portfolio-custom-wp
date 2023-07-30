<section class="project__slider">
    <div class="container">
        <h3 class="project__slider__heading mb-3">Other Projects</h3>
        <div class="project__slider__wrapper">
            <div class="projects__slider">
                <?php
                $projects = new WP_Query(array(
                    "posts_per_page" => 10,
                    "post_type" => "projects",
                    "orderby" => "meta_value_num",
                    "order" => "ASC"
                ));
                while ($projects->have_posts()) {
                    $projects->the_post(); ?>
                    <div>
                        <?php get_template_part("inc/partials/project-slider-card"); ?>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>


