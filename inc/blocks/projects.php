<?php
$projects_heading = get_field('projects_heading');
?>
<section class="projects">
    <div class="container">
        <h3 class="project__heading"><?php echo $projects_heading; ?></h3>
        <?php
        $projects = new WP_Query(array(
            "posts_per_page" => 3,
            "post_type" => "projects",
            "orderby" => "meta_value_num",
            "order" => "ASC"
        ));
        while ($projects->have_posts()) {
            $projects->the_post();
            get_template_part("inc/partials/project-card");
        }
        wp_reset_postdata();
        ?>
    </div>
</section>
