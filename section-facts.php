<section class="section-facts" id="facts">
    <div class="container">
        <span class="section-title"><?php the_field('facts_title') ?></span>
        <div class="row facts-wrapper">
           <?php 
                $facts = get_field('facts_list');
                if($facts){
                    foreach($facts as $fact){ ?>
                        <div class="col-lg-3 col-sm-4 col-xs-6">
                            <div class="facts-block f1" style="background: url(<?php echo nano_get_webp_image($fact['facts_item_bg']['url']) ?>) no-repeat 50%;">
                                <?php echo $fact['facts_item_text']?>
                            </div>
                        </div>   
            <?php
                    }
                }
            ?>     
        </div>
    </div>
</section>