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
            <p class="freelance__information mb-4"><?php echo $information; ?></p>
        <?php } ?>

        <?php if ($freelance_button_text != null){ ?>
            <a class="btn__primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                <?php echo $freelance_button_text; ?><i class="fa-solid fa-arrow-right pl-1 btn__primary__arrow"></i>
            </a>
        <?php }

        include("inc/partials/enquiry-modal.php");
        ?>
    </div>
</section>

<?php

include("inc/blocks/accordion.php");

include("inc/blocks/blog-slider.php");

get_footer();