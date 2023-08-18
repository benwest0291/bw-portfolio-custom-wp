<?php
/* Template Name: Contact */
get_header();

$heading = get_field('heading');
$subheading = get_field('subheading');
$button_text = get_field('button_text');
$button_url = get_field('button_url');
$information_heading = get_field('information_heading');
$information_content = get_field('information_content');
$social_heading = get_field('social_heading');
$phone = get_theme_mod('contact_telephone');
$email = get_theme_mod('contact_email');
$linkedin = get_theme_mod('linkedin_url');
$github = get_theme_mod('github_url');
$form = get_field("contact_form");

if ($form != null) {
$formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}
?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-8 contact__bg"style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/rays.svg););">
                <?php if($heading != null) { ?>
                    <h1 class="contact__heading mt-3"><?php echo $heading; ?></h1>
                <?php } ?>

                <?php if($subheading != null ) { ?>
                    <p class="mt-3 mb-3"><?php echo $subheading; ?></p>
                <?php } ?>

                <?php if($button_text != null){ ?>
                    <a class="btn__secondary" target="_blank" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
                <?php } ?>

                <div class="contact__information">
                    <?php if($information_heading != null) { ?>
                        <h3 class="contact__information__heading"><?php echo $information_heading;?></h3>
                    <?php } ?>

                    <?php if($information_content != null) { ?>
                        <p class="mt-3"><?php echo $information_content ;?></p>
                    <?php } ?>

                    <?php if($phone != null) { ?>
                        <div class="mt-3">
                            <i class="fa-solid fa-phone footer__icon"></i>
                            <a class="footer__phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        </div>
                    <?php } ?>

                    <?php if($email != null) { ?>
                        <div class="mt-3">
                            <i class="fa-solid fa-envelope footer__icon"></i>
                            <a class="footer__mail" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </div>
                    <?php } ?>
                </div>

                <div class="contact__socail mt-5 mb-5">
                    <?php if($social_heading != null) { ?>
                        <h3 class="contact__social__heading"><?php echo $social_heading;?></h3>
                    <?php } ?>
                    <div class="contact__social">
                        <div class="mt-2">
                            <?php if($linkedin != null){ ?>
                                <a title="Ben Wests Linkedin" href="<?php echo $linkedin;?>" target="_blank" class="contact__social__icon"><i class="fa-brands fa-linkedin social__icon"></i></a>
                            <?php } ?>

                            <?php if($github != null){ ?>
                                <a title="Ben Wests Github" href="<?php echo $github;?>" target="_blank" class="contact__social__icon"><i class="fa-brands fa-github social__icon"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 mb-5">
               <?php include("inc/partials/contact-form.php"); ?>
            </div>
        </div>
    </div>
</section>

<?php include("inc/blocks/blog-slider.php");

get_footer();?>
