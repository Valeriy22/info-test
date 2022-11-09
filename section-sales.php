<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<section class="section-sales" id="sales">
    <div class="container">
        <span class="section-title"><?php the_field('sales_title') ?></span>
        <div class="row">
            <div class="sales-map">
                <img src="<?php echo nano_get_webp_image(wp_get_attachment_image_url( get_field('sales_image')['ID'], 'nano-sales')) ?>" alt="">
            </div>
            <?php echo strstr($link,'/sample-page/ru/' ) ? do_shortcode( '[contact-form-7 id="342" title="Country Form_ru" html_class="sales-form pbz-form clear-styles"]' ) : do_shortcode( '[contact-form-7 id="262" title="Bulgaria Form" html_class="sales-form pbz-form clear-styles"]' ); ?>
        </div>
    </div>
</section>