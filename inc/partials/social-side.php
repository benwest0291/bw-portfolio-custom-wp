<?php
$linkedin = get_theme_mod('linkedin_url');
$github = get_theme_mod('github_url');
?>

<section class="d-none d-md-block">
    <div class="social__side bounce">
        <div class="social__side__icons mt-2 d-flex flex-column ">
            <?php if($linkedin != null){ ?>
                <a href="<?php echo $linkedin;?>" target="_blank"><i class="fa-brands fa-linkedin social__icon mb-2"></i></a>
            <?php } ?>

            <?php if($github != null){ ?>
                <a href="<?php echo $github;?>" target="_blank"><i class="fa-brands fa-github social__icon"></i></a>
            <?php } ?>
        </div>
    </div>
</section>

