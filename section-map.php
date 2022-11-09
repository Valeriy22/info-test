<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<div class="map-wrapper"  id="contacts">
    <div class="map" id="map">
    </div>
    <div class="container">
        <?php echo strstr($link,'/sample-page/ru/' ) ? do_shortcode( '[contact-form-7 id="340" title="Contact Us Form_ru" html_class="map-form pbz-form clear-styles"]') : do_shortcode( '[contact-form-7 id="264" title="Contact Us Form" html_class="map-form pbz-form clear-styles"]' ); ?>
    </div>
</div>