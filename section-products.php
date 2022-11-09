<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<section class="section-products" id="products">
    <div class="container">
        <span class="section-title"><?php the_field('products_title') ?></span>
        <div class="products-wrapper">           
           <?php 
                $products = get_field('products_list');
                if($products){
                    foreach($products as $product){ ?>
                     <div class="product">
                        <span class="product-title"><?php echo $product['product_name'] ?></span>
                        <div class="disc-pic__wrapper">
                            <img class="disc-pic" src="<?php echo nano_get_webp_image($product['product_image']['url']) ?>" alt="">
                            <?php 
                                $product_types = $product['product_types'];
                                if($product_types){
                                    foreach($product_types as $type){ ?>
                                        <div class="product-type type<?php echo filter_var($type['product_type_name'], FILTER_SANITIZE_NUMBER_INT)?>">
                                            <img src="<?php echo nano_get_webp_image($type['product_type_image']['url']) ?>" alt="">
                                            <span><?php echo $type['product_type_name'] ?></span>
                                        </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <ul class="product-materials">
                        <?php 
                            $materials = $product['product_materials'];
                            if($materials){
                                foreach($materials as $material){ ?>
                                <li>
                                    <img src="<?php echo nano_get_webp_image($material['product_material_image']['url']) ?>" alt="">
                                </li>
                        <?php
                                }
                            }
                        ?>
                        </ul>
                        <div class="product-specs">                           
                            <p><?php echo $product['product_specification'] ?></p>
                            <span><?php echo $product['product_contents']['product_contents_title'] ?></span>
                            <ul>
                            <?php 
                                $product_contents = $product['product_contents']['product_contents_list'];
                                if($product_contents){
                                    foreach($product_contents as $item){ ?>
                                     <li><?php echo $item['product_contents_item'] ?></li>
                            <?php
                                    }
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
           <?php 
                    }
                }
            ?>          
        </div>
        <div class="products-footnote"><?php the_field('products_footnote') ?></div>
    </div>
</section>

<section class="section-offer">
    <div class="container">
        <span class="section-title wh"  <?php echo strstr($link,'/sample-page/ru/' ) ? 'data-txt="СКАЧАТЬ ПОЛНЫЙ КАТАЛОГ"' : 'data-txt="Download the full catalog"'?>><?php the_field('products_form_title') ?></span>
        <?php echo strstr($link,'/sample-page/ru/' ) ?  do_shortcode( '[contact-form-7 id="343" title="Download Catalog Form_ru" html_class="offer-form pbz-form clear-styles"]' ) : do_shortcode( '[contact-form-7 id="263" title="Download Catalog Form" html_class="offer-form pbz-form clear-styles"]' ); ?>
    </div>
</section>