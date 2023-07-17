<?php
// Menus
$menuLocations = get_nav_menu_locations();
$logo = get_theme_mod('logo');

if (isset($menuLocations['header'])) {
    $header_links = wp_get_nav_menu_items($menuLocations['header']);
} else {
    $header_links = array();
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
        <div class="row">
            <div class="col-12 col-md-6">
                <a href="<?php echo site_url("/") ?>"><img class="header__logo mt-1" src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo("name"); ?>"></img></a>
            </div>
            <?php if (!empty($header_links)) { ?>
                <div class="col-12 col-md-6">
                    <ul class="header__links list-unstyled mt-1 d-flex justify-content-end">
                        <?php foreach ($header_links as $item) { ?>
                            <li class="header__links-nav__item m-1">
                                <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php } ?>
                        <li class="header__links-nav__item m-1">
                            <a href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</header>
