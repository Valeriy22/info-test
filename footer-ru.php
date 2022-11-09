<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="footer-logo__wrapper">
                            <img class="footer-logo" src="<?php echo nano_get_webp_image(get_field('footer_logo', 'option')['url']) ?>" alt="">
                            <span class="footer-descr"><?php the_field('footer_сopyright_ru', 'option') ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <?php
                            wp_nav_menu([
                                'container' => false,
                                'menu_class' => 'footer-list',
                                'menu_id' => '',
                                'theme_location' => 'footer-menu-ru',
                            ]);
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="footer-address">
                            <?php the_field('footer_contacts_ua_address_ru', 'option') ?>
                        </p>
                        <span class="footer-subheader"><?php echo get_field('footer_contacts_ua_phones_ru', 'option')['footer_contacts_ua_phones_title_ru'] ?></span>
                        <?php 
                            $phones_ua = get_field('footer_contacts_ua_phones_ru', 'option')['footer_contacts_ua_phones_items_ru'];
                            if($phones_ua){
                                foreach($phones_ua as $phone){ ?>
                                    <a class="footer-phone" href="tel:<?php echo $phone['footer_contacts_ua_phones_item_ru'] ?>"><?php echo $phone['footer_contacts_ua_phones_item_ru'] ?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col-sm-6">
                        <p class="footer-address">
                            <?php the_field('footer_contacts_uk_address', 'option') ?>
                        </p>
                        <span class="footer-subheader"><?php echo get_field('footer_contacts_uk_phones', 'option')['footer_contacts_uk_phones_title'] ?></span>
                        <?php 
                            $phones_uk = get_field('footer_contacts_uk_phones', 'option')['footer_contacts_uk_phones_items'];
                            if($phones_uk){
                                foreach($phones_uk as $phone){ ?>
                                    <a class="footer-phone" href="tel:<?php echo $phone['footer_contacts_uk_phones_item'] ?>"><?php echo $phone['footer_contacts_uk_phones_item'] ?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="triplefork">
            <span>Developed by</span>
            <a href="https://triplefork.it" target="_blank" rel="nofollow">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH4AAAAaCAYAAABxRujEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTRCN0IyNkQ2NTlBMTFFOUJEQzBGODg1ODUxOEU0QTIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTRCN0IyNkU2NTlBMTFFOUJEQzBGODg1ODUxOEU0QTIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NEI3QjI2QjY1OUExMUU5QkRDMEY4ODU4NTE4RTRBMiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1NEI3QjI2QzY1OUExMUU5QkRDMEY4ODU4NTE4RTRBMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjCy2UkAAAboSURBVHja7JkLkE11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" alt="" data-no-lazy="1">
            </a>
        </div>
    </div>
</footer>
<div class="mfp-hide">
    <div class="popup-info" id="popup-info1">
    </div>
</div>