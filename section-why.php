<section class="section-why" id="why">
    <div class="container">
        <span class="section-title" data-txt="why 200+ large companies around the globe work with us"><?php the_field('why_title') ?>
</span>
        <div class="row">
            <div class="col-md-6">
                 <img class="why-pic" src="<?php echo nano_get_webp_image(wp_get_attachment_image_url(get_field('why_image')['ID'], 'nano-why')) ?>" alt="">
            </div>
            <div class="col-md-6">
                <ul class="why-list">
                   <?php 
                        $reasons = get_field('why_reasons');
                        if($reasons){
                            foreach($reasons as $reason){ ?>
                                <li>
                                    <span><?php echo $reason['why_reason_item'] ?></span>
                                    <p><?php echo $reason['why_reason_description'] ?></p>
                                </li>
                    <?php
                            }
                        }
                    ?> 
                </ul>
            </div>
        </div>
    </div>
</section>
