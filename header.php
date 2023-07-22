<?php
// Menus
$menuLocations = get_nav_menu_locations();
$logo = get_theme_mod('logo');

if (isset($menuLocations['header'])) {
    $header_links = wp_get_nav_menu_items($menuLocations['header']);
} else {
    $header_links = null;
}
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container">
        <div class="row pt-1">
            <div class="col-12 col-md-6">
                <?php if ($logo != null) { ?>
                    <a href="<?php echo site_url("/") ?>"><img class="header__logo mt-2" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></a>
                <?php } ?>
            </div>
            <?php if (!empty($header_links)) { ?>
                <div class="header__links__container col-12 col-md-6">
                    <ul class="header__links list-unstyled">
                        <?php foreach ($header_links as $item) { ?>
                            <li class="header__link m-1">
                                <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php } ?>
                        <li class="btn__primary header__links__contact m-1">
                            <a href="contact">Get in touch <i class="fa-solid fa-arrow-right pl-1 btn__primary__arrow"></i></a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
