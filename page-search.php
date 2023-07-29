<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
    <section class="search">
        <div class="container">
            <h3 class="text-center">Search</h3>
            <form method="get" action="<?php echo esc_url(site_url('/')); ?>">
                <input type="search" name="s">
                <input type="submit" value="search">
            </form>
        </div>
    </section>
    <?php
    }
}

get_footer();