<?php
$logo = get_theme_mod('logo');
$linkedin = get_theme_mod('linkedin_url');
$github = get_theme_mod('github_url');
$info = get_theme_mod('website_info');
$phone = get_theme_mod('contact_telephone');
$email = get_theme_mod('contact_email');

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <?php if ($logo != null) { ?>
                    <a title="Ben West Dev homepage" href="<?php echo site_url("/") ?>"><img class="footer__logo mt-3" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></a>
                <?php } ?>

                <?php if ($phone != null) { ?>
                    <div class="mt-3">
                        <i class="fa-solid fa-phone footer__icon"></i>
                        <a title="Ben West phone number" class="footer__phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                <?php } ?>

                <?php if ($email != null) { ?>
                    <div class="mt-3">
                        <i class="fa-solid fa-envelope footer__icon"></i>
                        <a title="Ben West email" class="footer__mail" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                <?php } ?>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <h3 class="footer__heading mt-3">Blog</h3>
                <ul class="list-unstyled mt-4">
                    <?php
                    $posts = new WP_Query(array(
                        "posts_per_page" => 5,
                        "post_type" => "post",
                        "orderby" => "meta_value_num",
                        "order" => "ASC"
                    ));
                    while ($posts->have_posts()) {
                        $posts->the_post();
                        ?>
                            <li class="mb-2">
                                <a title="<?php the_title();?>" class="footer__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <h3 class="footer__heading mt-3">Projects</h3>
                <ul class="list-unstyled mt-4">
                    <?php
                    $projects = new WP_Query(array(
                        "posts_per_page" => 5,
                        "post_type" => "projects",
                        "orderby" => "meta_value_num",
                        "order" => "ASC"
                    ));
                    while ($projects->have_posts()) {
                        $projects->the_post();
                        ?>
                        <li class="mb-2">
                            <a title="<?php the_title();?>" class="footer__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
                <h3 class="footer__heading mt-3">Connect</h3>
                <div class="footer__social">
                    <div class="d-flex justify-content-between mt-2">
                        <?php if($linkedin != null){ ?>
                            <a title="Linkedin" href="<?php echo $linkedin;?>" target="_blank"><i class="fa-brands fa-linkedin social__icon"></i></a>
                        <?php } ?>

                        <?php if($github != null){ ?>
                            <a title="Github" href="<?php echo $github;?>" target="_blank"><i class="fa-brands fa-github social__icon"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer__lower">
    <div class="container mt-2">
        <p class="text-center"><?php echo $info;?></p>
    </div>
</section>

<?php wp_footer(); ?>
</body>

</html>

