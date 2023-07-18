<?php get_header();

$masthead_top_heading = get_field('masthead_top_heading');
$masthead_main_heading = get_field('masthead_main_heading');
$masthead_content = get_field('masthead_content');
?>

<section class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="masthead__top__heading"><?php echo $masthead_top_heading; ?></h1>
                <?php echo $masthead_main_heading; ?>

                <p class="masthead__masthead__content mt-3"><?php echo $masthead_content; ?></p>
            </div>

            <div class="col-12 col-md-6">

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
