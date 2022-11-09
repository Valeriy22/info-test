<section class="section-who" id="who" style=" background: url(<?php echo nano_get_webp_image(wp_get_attachment_image_url(get_field('who_background')['ID'], 'nano-who-bg')) ?>) no-repeat center 210px;">
    <div class="container">
        <span class="section-title"><?php the_field('who_title') ?></span>
        <div class="who-video" style="background: url(<?php echo nano_get_webp_image(wp_get_attachment_image_url(get_field('who_preview')['ID'], 'nano-who-video')) ?>) no-repeat;">
            <div class="who-video__inner">
                <?php the_field('who_video') ?>
            </div>
        </div>
    </div>
</section>