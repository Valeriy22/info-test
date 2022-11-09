<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php
global $post;
$id = $post->ID;
$link = get_page_link($id);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/bg-or.png" type="image/png">

    <title><?php echo strstr($link,'/sample-page/ru/' ) ? 'Нововодолажский абразивный завод' : 'Novovodalazkyi Abrasive plant'?></title>

    <?php wp_head(); ?>
</head>
<body id='body' <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <a href="<?php bloginfo('url') ?>" class="header-logo">
                <img <?php if(!is_front_page()) { ?> data-no-lazy="1" <?php }?> src="<?php echo nano_get_webp_image(get_field('header_logo', 'option')['url']) ?>" alt="">
            </a>
            <span class="header-descr"><?php echo strstr($link,'/sample-page/ru/' ) ? the_field('header_text_ru', 'option') : get_field('header_text', 'option') ?></span>
            <div class="header-btn__wrapper">
                <span>Abrasive plant, Ukraine</span>
                <a href="#contacts" class="header-btn"><?php echo strstr($link,'/sample-page/ru/' ) ? get_field('header_button_ru', 'option') : get_field('header_button', 'option') ?></a>
            </div>
        </div>
    </div>
</header>

