<section class="section-gallery" id="gallery">
    <div class="container">
        <span class="section-title" data-txt="International Fairs"><?php the_field('gallery_title');?></span>
        <div class="row">
            <div class="gallery lightgallery">
                 <?php
                    $classes = array('lg', '', 'pr0', '', 'pr0', 'pr0_lg1', '', '' ,'pr0 pr0_lg');
                    $photos = get_field('gallery_photos');
                    if($photos){
                        for( $i = 0; $i < sizeof($photos); $i++ ){                           
                 ?>
                        <a data-src="<?php echo nano_get_webp_image(wp_get_attachment_image_url($photos[$i]['ID'],'nano-gallery-zoom')) ?>" class="gallery-pic light-item <?php echo $classes[$i] ?>">
                             <img src="<?php echo $i != 0 ? nano_get_webp_image(wp_get_attachment_image_url( $photos[$i]['ID'], 'nano-gallery')) : nano_get_webp_image(wp_get_attachment_image_url( $photos[$i]['ID'], 'nano-gallery-lg')) ?>" alt="">
                        </a>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>