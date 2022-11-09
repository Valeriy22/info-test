<?php
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendors.js');
    wp_enqueue_script('app', get_template_directory_uri() . '/app.js');
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/application.css');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
});

register_nav_menus(array(
    'footer-menu' => 'Footer Menu',
    'footer-menu-ru' => 'Footer Menu Ru'
));

add_theme_support('widgets');

remove_filter( 'the_content', 'wpautop' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'nano-main-bg', 1920, 9999 );
    add_image_size( 'nano-who-bg', 9999, 507 );
    add_image_size( 'nano-who-video', 958, 569 );
    add_image_size( 'nano-sales', 1172, 579 );
    add_image_size( 'nano-certificate', 194, 282 );
    add_image_size( 'nano-certificate-zoom', 564, 980 );
    add_image_size( 'nano-certificate-frame', 268, 359 );
    add_image_size( 'nano-why', 502, 658 );
    add_image_size( 'nano-gallery', 270, 9999 );
    add_image_size( 'nano-gallery-lg', 570, 370 );
    add_image_size( 'nano-gallery-zoom', 1300, 950 );
}

function nano_get_webp_image($imageurl)
{
    return $imageurl;
    if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') === false) {
        return $imageurl;
    } else {
        if (strtolower(pathinfo($imageurl, PATHINFO_EXTENSION )) === 'webp'){
            return $imageurl;
        } else {

            $dest =  pathinfo($imageurl, PATHINFO_DIRNAME) . '/' . pathinfo($imageurl, PATHINFO_DIRNAME) . '.webp';

           /* if (!file_exists($dest) && file_exists($imageurl)) {
                $dest = nano_create_webp($imageurl, $dest);
                return $dest;
            }*/
           // return  pathinfo($imageurl, PATHINFO_DIRNAME) . '/' . pathinfo($imageurl, PATHINFO_FILENAME) . '.webp';

            return  nano_create_webp($imageurl, $dest);
        }
    }
}

function nano_imagecreatefromfile($filename)
{
    switch (strtolower(pathinfo($filename, PATHINFO_EXTENSION ))) {
        case 'jpeg':
        case 'jpg':
            return imagecreatefromjpeg($filename);
            break;

        case 'png':
            return imagecreatefrompng($filename);
            break;

        case 'gif':
            return imagecreatefromgif($filename);
            break;
    }
}

function nano_create_webp($source, $dest){
    if(exif_imagetype($source)){
        $image = nano_imagecreatefromfile($source);
        imagewebp($image, $dest);
        imagedestroy($image);
        return $dest;
    }
}