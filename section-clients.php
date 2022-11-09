<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<section class="section-clients" id="clients" >
    <div class="container">
        <span class="section-title"><?php the_field('clients_title') ?></span>
        <ul class="clients-list">
           <?php 
                $clients = get_field('clients_list');
                if($clients){
                    foreach($clients as $client){ ?>
                        <li>
                            <div class="clients-icon">
                                <span class="icon-<?php echo $client['clients_item_icon']['value'] ?>"></span>
                            </div>
                            <p><?php echo $client['clients_item_text'] ?></p>
                        </li>
            <?php
                    }
                }
            ?>             
        </ul>
    </div>
</section>

<section class="section-offer">
    <div class="container">
        <span class="section-title wh" <?php echo strstr($link,'/sample-page/ru/' ) ? 'data-txt="ПОЛУЧИТЕ ПРЕДЛОЖЕНИЕ О СОТРУДНИЧЕСТВЕ"' : 'data-txt="Get an offer on cooperation"'?>><?php the_field('clients_form_title') ?></span>
        <?php echo strstr($link,'/sample-page/ru/' ) ? do_shortcode('[contact-form-7 id="341" title="Cooperation Form_ru" html_class="offer-form pbz-form clear-styles"]') : do_shortcode( '[contact-form-7 id="261" title="Cooperation Form" html_class="offer-form pbz-form clear-styles"]' ); ?>
    </div>
</section>
