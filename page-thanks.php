<?php /* Template Name: Thanks Template */ ?>
<?php get_header('thanks'); ?>
<?php
    parse_str($_SERVER['QUERY_STRING'], $params);
?>
<main>
    <section class="section-thanks">
        <div class="thanks-wrapper">
            <div class="thanks-txt"><?php the_field('thanks_title') ?></div>
           <!-- <span class="thanks-youcan"><?php echo $params['your-name']?> also you can:</span>-->
            <div class="thanks-footer">
                <div class="thanks-back">
                    <span><?php the_field('thanks_website_pre_text'); ?></span>
                    <a class="thanks-back__btn" href="<?php the_field('thanks_website_link') ?>">novoabrasive.com</a>
                    <a class="thanks-back__link" href="<?php the_field('thanks_website_link') ?>"><?php echo str_replace ( 'http://' , '' , get_field('thanks_website_link')) ?></a>
                </div>
                <div class="thanks-fb">
                    <span><?php the_field('thanks_facebook_pre_text'); ?></span>
                    <a class="thanks-fb__btn" href="<?php the_field('thanks_facebook_link') ?>"><i></i>Facebook</a>
                    <a class="thanks-back__link" href="<?php the_field('thanks_facebook_link') ?>"><?php echo str_replace ( 'http://' , '' , get_field('thanks_facebook_link')) ?></a>
                </div>
            </div>
        </div>
    </section>
</main>