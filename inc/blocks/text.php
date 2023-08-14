<?php
$text_heading = $data['text_heading'];
$text_content = $data['text_content'];
?>
<section class="text mt-5">
    <div class="container">
        <?php if($text_heading != null ) { ?>
            <h3 class="text__heading text-center mb-3"><?php echo $text_heading; ?></h3>
        <?php } ?>

        <?php if($text_content != null) { ?>
            <?php echo $text_content; ?>
        <?php } ?>
    </div>
</section>
