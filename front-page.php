<?php get_header();

render_masthead("masthead_homepage");

include("inc/blocks/tech-stack.php");

render_text("home_page_text");

include("inc/blocks/projects.php");

include("inc/blocks/blog-slider.php");

get_footer();?>

