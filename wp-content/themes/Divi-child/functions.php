<?php
define('THEME_VERSION', '1.0.71855');
function lrg_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style( 'owl-style-main',
        get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(  ), THEME_VERSION
    );
    wp_enqueue_style( 'owl-style-default',
        get_stylesheet_directory_uri() . '/css/owl.theme.default.css', array(  ), THEME_VERSION
    );
    wp_enqueue_style( 'animation',
        get_stylesheet_directory_uri() . '/css/animane.min.css', array(  ), THEME_VERSION
    );
    wp_enqueue_style( 'custom-fonts-css',
        get_stylesheet_directory_uri() . '/css/font.css', array(), THEME_VERSION
    );
    wp_enqueue_style( 'custom-adobe-fonts-css',
           'https://use.typekit.net/zft2mos.css', array(), THEME_VERSION
        );
    wp_enqueue_style( 'divi-style',
        get_stylesheet_directory_uri() . '/style.css', array('custom-fonts-css', 'custom-adobe-fonts-css'), THEME_VERSION
    );
    wp_enqueue_style( 'divi-style-2',
        get_stylesheet_directory_uri() . '/style2.css', array('custom-fonts-css', 'custom-adobe-fonts-css'), THEME_VERSION
    );
    wp_enqueue_script( 'carousel-script',
        get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), THEME_VERSION
    );
    wp_enqueue_script( 'custom-script',
        get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), THEME_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'lrg_theme_enqueue_styles' );

remove_filter( 'the_content', 'wpautop' );


/* added menu */
function menu_setup()
{
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main_menu' => 'Main Menu',
    ));
}

add_action('after_setup_theme', 'menu_setup');



if (!function_exists('lascala_head_meta_tags')) {
    function lascala_head_meta_tags()
    {
		if (is_single()) {
			$id = get_the_ID();
			$yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );
			if ($yoast_desc){
				echo '<meta name="description" content="'.  $yoast_desc .'"/>'.PHP_EOL;
			}	else {
				echo '<meta name="description" content="'. get_bloginfo('description') .'"/>'.PHP_EOL;
			}
		} else {
			//echo '<meta name="description" content="'. get_bloginfo('description') .'"/>'.PHP_EOL;
		}
        echo '<meta name="keywords" content="'. get_bloginfo('keywords') .'"/>'.PHP_EOL;

        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2, user-scalable=yes" />'.PHP_EOL;
		echo '<meta name="apple-mobile-web-app-capable" content="yes" />'.PHP_EOL;
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />'.PHP_EOL;

		$preview_image = get_field('share_preview_image');

        if (is_single()) {
            $featured_image = get_field('featured_image');
            $image_url = $featured_image['url'];

			echo '<meta property="og:url" content="'.get_the_permalink().'" />'.PHP_EOL;
            echo '<meta property="og:type" content="summary" />'.PHP_EOL;
            echo '<meta property="og:title" content="'.get_the_title().'" />'.PHP_EOL;
            echo '<meta property="og:description" content="'.get_field('short_description').'" />'.PHP_EOL;
            if ($preview_image){
                echo '<meta property="og:image" content="'.$preview_image.'" />'.PHP_EOL;
                echo '<meta itemprop="image" content="'.$preview_image.'" />'.PHP_EOL;
            } else if($image_url) {
                echo '<meta property="og:image" content="'.$image_url.'" />'.PHP_EOL;
                echo '<meta itemprop="image" content="'.$image_url.'"/>'.PHP_EOL;
            } else{
                 echo '<meta property="og:image" content="'.get_stylesheet_directory_uri().'/assets/img/lascala.jpg" />'.PHP_EOL;
                 echo '<meta itemprop="image" content="'.get_stylesheet_directory_uri().'/assets/img/lascala.jpg"/>'.PHP_EOL;
            }
            echo '<meta name="twitter:title" content="'.get_the_title().'"/>'.PHP_EOL;
            echo '<meta name="twitter:image" content="'.$image_url.'"/>'.PHP_EOL;
            echo '<meta name="twitter:url" content="'.get_the_permalink().'"/>'.PHP_EOL;
            echo '<meta name="twitter:card" content="summary"/>'.PHP_EOL;
            echo '<meta name="twitter:description" content="'.get_field('short_description').'"/>'.PHP_EOL;
            echo '<meta itemprop="name" content="'.get_the_title().'"/>'.PHP_EOL;
            echo '<meta itemprop="url" content="'.get_the_permalink().'"/>'.PHP_EOL;
            echo '<meta itemprop="description" content="'.get_field('short_description').'"/>'.PHP_EOL;
            echo '<meta itemprop="author" content="LaScala Restaurant Group"/>'.PHP_EOL;
            echo '<meta itemprop="datePublished" content="'.get_the_time().'"/>'.PHP_EOL;
            echo '<meta itemprop="headline" content="'.get_the_title().'"/>'.PHP_EOL;
            echo '<meta itemprop="publisher" content="LaScala Restaurant Group"/>'.PHP_EOL;
        } else {
			echo '<meta property="og:title" content="'. get_bloginfo('name') .'">'.PHP_EOL;
            //echo '<meta property="og:description" content="'.get_bloginfo('description').'" />'.PHP_EOL;

                $preview_image = get_the_post_thumbnail_url();

            if ($preview_image){
                echo '<meta property="og:image" content="'.$preview_image.'" />'.PHP_EOL;
                echo '<meta itemprop="image" content="'.$preview_image.'" />'.PHP_EOL;
            } else {
                echo '<meta property="og:image" content="'.get_stylesheet_directory_uri().'/assets/img/lascala.jpg" />'.PHP_EOL;
                echo '<meta itemprop="image" content="'.get_stylesheet_directory_uri().'/assets/img/lascala.jpg"/>'.PHP_EOL;
            }
            echo '<meta property="og:image:type" content="image/png" />'.PHP_EOL;
            echo '<meta property="og:image:width" content="1200" >'.PHP_EOL;
            echo '<meta property="og:image:height" content="637" />'.PHP_EOL;
			echo '<meta itemprop="name" content="'.get_bloginfo('name').'"/>'.PHP_EOL;
		}


    }
    add_action('wp_head', 'lascala_head_meta_tags', 1);
}


?>
