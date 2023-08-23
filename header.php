<?php
// Menus

$menuLocations = get_nav_menu_locations();
$logo = get_theme_mod('logo');
$linkedin = get_theme_mod('linkedin_url');
$github = get_theme_mod('github_url');

if (isset($menuLocations['header'])) {
    $header_links = wp_get_nav_menu_items($menuLocations['header']);
} else {
    $header_links = null;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHN2E0YZ2V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DHN2E0YZ2V');
    </script>
    <!-- End of Google tag (gtag.js) -->
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container">
        <div class="navigation__burger">
            <div class="line__one"></div>
            <div class="line__two"></div>
            <div class="line__three"></div>
        </div>
        <div class="row pt-1">
            <div class="col-12 col-md-6">
                <?php if ($logo != null) { ?>
                    <a title="Ben West dev homepage" href="<?php echo site_url("/") ?>"><img class="header__logo mt-1 mt-md-2" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></a>
                <?php } ?>
            </div>
            <?php if (!empty($header_links)) { ?>
                <nav class="header__links__container col-12 col-md-6">
                    <ul class="header__links list-unstyled">
                        <?php foreach ($header_links as $item) { ?>
                            <li class="header__link m-1">
                                <a title="<?php echo $item->title; ?>" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="header__contact d-flex justify-content-center mt-3 d-md-none d-block">
                        <div class="w-25">
                            <div class="d-flex justify-content-between mt-2 ">
                                <?php if($linkedin != null){ ?>
                                    <a title="Linkedin" href="<?php echo $linkedin;?>" target="_blank"><i class="fa-brands fa-linkedin social__icon"></i></a>
                                <?php } ?>

                                <?php if($github != null){ ?>
                                    <a title="Github"  href="<?php echo $github;?>" target="_blank"><i class="fa-brands fa-github social__icon"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </nav>
            <?php
            } ?>
        </div>
    </div>
</header>

<?php include("inc/partials/social-side.php"); ?>



