<?php get_header();?>
    <article class="post">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="post__heading"><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-md-6">
                    <div class="post__details d-flex justify-content-md-end">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 52 );  ?>
                        <div class="d-flex justify-content-between flex-column">
                            <p>Author: <strong><?php the_author(); ?></strong></p>
                            <p>Posted: <strong><?php echo get_the_date(); ?></strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <img class="post__image mt-2" src="<?php echo the_post_thumbnail_url("post"); ?>">
            <div class="post__content p-md-4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg););">
                <p class="mt-3 mt-md-0"><?php the_content();?></p>
                <h3 class="post__share mt-3">Share this page</h3>
                <div class="post__share__icons mt-2 mb-3 mb-md-0">
                    <a title="Share post on Linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink();?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a title="Share post on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <a title="Share post on Twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                </div>
            </div>
        </div>
    </article>
<?php

include("inc/blocks/blog-slider.php");

get_footer();?>