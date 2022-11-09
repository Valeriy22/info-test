<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<section class="section-main" style="background: url(<?php echo nano_get_webp_image(wp_get_attachment_image_url(get_field('main_background')['ID'], 'nano-main-bg')) ?>) no-repeat 50%;">
    <div class="container">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="main-info">
                <span class="main-title"><?php the_field('main_title') ?></span>
                <p class="main-descr"><?php the_field('main_text') ?></p>
                <ul class="main-advantages">
                   <?php 
                        $advantages = get_field('main_advantages');
                        if($advantages){
                            foreach($advantages as $item){ ?>
                                <li><?php echo $item['main_advantages_item'] ?></li>
                    <?php
                            }
                        }
                    ?>               
                </ul>
                <?php echo strstr($link,'/sample-page/ru/' ) ? do_shortcode('[contact-form-7 id="344" title="Main Form_ru" html_class="main-form pbz-form clear-styles"]') : do_shortcode( '[contact-form-7 id="243" title="Main Form" html_class="main-form pbz-form clear-styles"]' ); ?>
            </div>
        </div>
    </div>
</section>