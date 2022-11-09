<?php /* Template Name: Main Page Template */ ?>
<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<?php get_header(); ?>

<?php get_template_part( 'section-main' ); ?> 
<?php get_template_part( 'section-who' ); ?> 
<?php get_template_part( 'section-clients' ); ?> 
<?php get_template_part( 'section-sales' ); ?> 
<?php get_template_part( 'section-facts' ); ?> 
<?php get_template_part( 'section-products' ); ?> 
<?php get_template_part( 'section-certificates' ); ?> 
<?php get_template_part( 'section-why' ); ?> 
<?php get_template_part( 'section-gallery' ); ?> 
<?php get_template_part( 'section-faq' ); ?> 
<?php get_template_part( 'section-map' ); ?> 
<?php
if(strstr($link,'/sample-page/ru/' )){
    get_footer('ru');
} else {
    get_footer('en');
}
?>
<?php  get_footer(); ?>

