<?php
$services_heading = get_field('services_heading');

if (have_rows('service_cards')) { ?>
    <section class="services mb-5">
        <div class="container">
            <?php if ($services_heading != null) { ?>
                <h3 class="services__heading mb-4"><?php echo $services_heading ?></h3>
            <?php } ?>
            <div class="row gy-4">
                <?php while (have_rows('service_cards')) { the_row(); ?>
                    <div class="col-12 col-md-6">
                        <?php get_template_part("inc/partials/service-card"); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>


