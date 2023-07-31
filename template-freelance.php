<?php
/* Template Name: Freelance */
get_header();
$information = get_field('information');
$freelance_button_text = get_field('freelance_button_text');
$form = get_field("enquiry_form");

if ($form != null) {
    $formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}

render_masthead("masthead_freelance");

include("inc/blocks/services.php"); ?>

<section class="freelance mb-5">
    <div class="container">
        <?php if ($information != null){ ?>
            <div class="freelance__information"><?php echo $information; ?></div>
        <?php } ?>

        <?php if ($freelance_button_text != null){ ?>
            <div class="freelance__contact">
                <a class="btn__primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    <?php echo $freelance_button_text; ?>
                </a>
            </div>
        <?php }

        include("inc/partials/enquiry-modal.php");
        ?>
    </div>
</section>

<?php

include("inc/blocks/accordion.php");

include("inc/blocks/blog-slider.php");

get_footer();