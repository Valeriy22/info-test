<section class="section-certificates" id="certificates">
    <div class="container">
        <span class="section-title" data-txt="our certificates"><?php the_field('certificates_title') ?></span>
        <div class="certificates-wrapper">
           <?php 
                $certificates = get_field('certificates_list');
                if($certificates){
                    foreach( $certificates as $item ){
             ?>
                <a href="<?php echo nano_get_webp_image(wp_get_attachment_image_url($item['ID'], 'nano-certificate-zoom')) ?>" class="certificates-block image-popup-vertical-fit" style="background: url(<?php echo nano_get_webp_image(wp_get_attachment_image_url(get_field('certificates_frame')['ID'], 'nano-certificate-frame')) ?>) no-repeat;">
                    <div class="certificates-inner">
                        <img class="mfp-img-mobile certificates-pic" src="<?php echo nano_get_webp_image(wp_get_attachment_image_url($item['ID'], 'nano-certificate')) ?>" alt="">
                        <div class="certificates-zoom icon-magnifying-glass-zoom-in"></div>
                    </div>
                </a>
            <?php
                    }
                }
            ?>           
        </div>
    </div>
</section>