<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	/**
	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
	 * insert elements into the beginning of the head before any styles or scripts.
	 *
	 * @since 1.0
	 */
	do_action( 'et_head_meta' );

	$template_directory_uri = get_template_directory_uri();
?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
		const templateUrl = '<?=get_stylesheet_directory_uri() ?>' ;
	</script>


	<?php wp_head(); ?>
</head>
<?php if( is_front_page() ){ ?>
    <body <?php body_class('front-page'); ?>>
<?php } else { ?>
    <body <?php body_class('not-front-page'); ?>>
<?php } ?>
<?php
	$product_tour_enabled = et_builder_is_product_tour_enabled();
	$page_container_style = $product_tour_enabled ? ' style="padding-top: 0px;"' : ''; ?>
	<div id="page-container"<?php echo et_core_intentionally_unescaped( $page_container_style, 'fixed_string' ); ?> >
<?php $front_page_id = get_option( 'page_on_front' ); ?>
<?php if( is_front_page() ){ ?>

<header>
    <div class="menu-wrap">
        <div class="container">
            <a href="<?=get_home_url();?> " class="header-logo">
                <img  src="<?=get_field('logo_in_sticky_nav_home', $front_page_id)?>" />
            </a>
            <nav class="top-menu">
                <?php wp_nav_menu(array(
                    'menu' => 'Header menu',
                    'theme_location' => 'main_menu',
                    'container' => '',
                    'items_wrap' => '<ul class="main-menu-list %2$s">%3$s</ul>',
                    'items_class' => 'menu-link',
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => '3',
                )); ?>

            </nav>

            <a class="menu-icon-link" href="javascript:void(0);">
                <img class="menu-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/menu.svg'?>" alt="Menu toggle icon" />
            </a>
            <a class="close-menu" href="javascript:void(0);" >
                <img src="<?=get_stylesheet_directory_uri().'/assets/img/close.svg'?>" alt="Menu close icon">
            </a>
        </div>
    </div>
    <div id="before-slider" style="background-image: url('<?=get_field('header_background_before_slider_load')?>');">
        <div class="header-carousel owl-carousel owl-theme" style=" background-image: url('<?=get_field('header_background_before_slider_load')?>;">
            <?php
            if( have_rows('header_slider_home') ) {
                while( have_rows('header_slider_home') ) : the_row(); ?>

                    <div class="item item-slide" style=" background-image: url('<?=get_sub_field('slide_image')?>;" >
                        <div class="home-slider-image-wrap">
                            <img src="<?=get_field('main_logo_on_header_slider_1')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_2')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_3')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_4')?>" />
                        </div>
                    </div>

                <?php endwhile;

            } ?>
        </div>
    </div>
    <img class="arrow-down" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.png'?>" alt="Menu close icon">
</header>

<?php } elseif (is_page_template('page-home4.php') ) { ?>

<header>
    <div class="menu-wrap">
        <div class="container">
            <a href="<?=get_home_url();?> " class="header-logo">
                <img  src="<?=get_field('logo_in_sticky_nav_home', $front_page_id)?>" />
            </a>
            <nav class="top-menu">

                <?php wp_nav_menu(array(
                    'menu' => 'Header menu',
                    'theme_location' => 'main_menu',
                    'container' => '',
                    'items_wrap' => '<ul class="main-menu-list %2$s">%3$s</ul>',
                    'items_class' => 'menu-link',
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => '3',
                )); ?>
            </nav>
            <a class="menu-icon-link" href="javascript:void(0);">
                <img class="menu-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/menu.svg'?>" alt="Menu toggle icon" />
            </a>
            <a class="close-menu" href="javascript:void(0);" >
                <img src="<?=get_stylesheet_directory_uri().'/assets/img/close.svg'?>" alt="Menu close icon">
            </a>
        </div>
    </div>
    <div style="background-image: url('<?=get_field('header_background_before_slider_load')?>');height: 100vh;
                                                                                                max-height: 100vh;
                                                                                                background-position: center;
                                                                                                background-repeat: no-repeat;
                                                                                                background-size: cover;">
        <div class="header-carousel owl-carousel owl-theme" style=" background-image: url('<?=get_field('header_background_before_slider_load')?>;">
            <?php
            if( have_rows('header_slider_home') ) {
                while( have_rows('header_slider_home') ) : the_row(); ?>

                    <div class="item item-slide" style=" background-image: url('<?=get_sub_field('slide_image')?>;">
                        <div class="home-slider-image-wrap">
                            <img src="<?=get_field('main_logo_on_header_slider_1')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_2')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_3')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_4')?>" />
                        </div>
                    </div>

                <?php endwhile;

            } ?>
        </div>
    </div>
    <div class="arrow-dots arrow-circles">
        <span class="menu-circle"></span>
        <span class="menu-circle"></span>
        <span class="menu-circle"></span>
    </div>
    <img class="arrow-down" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.png'?>" alt="Menu close icon">
</header>


<?php } elseif (is_page_template('page-home2.php') ) { ?>

<header>
    <div class="menu-wrap">
        <div class="container">
            <a href="<?=get_home_url();?> " class="header-logo">
                <img  src="<?=get_field('logo_in_sticky_nav_home', $front_page_id)?>" />
            </a>
            <nav class="top-menu">

                <?php wp_nav_menu(array(
                    'menu' => 'Header menu',
                    'theme_location' => 'main_menu',
                    'container' => '',
                    'items_wrap' => '<ul class="main-menu-list %2$s">%3$s</ul>',
                    'items_class' => 'menu-link',
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => '3',
                )); ?>
            </nav>
            <a class="menu-icon-link" href="javascript:void(0);">
                <img class="menu-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/menu.svg'?>" alt="Menu toggle icon" />
            </a>
            <a class="close-menu" href="javascript:void(0);" >
                <img src="<?=get_stylesheet_directory_uri().'/assets/img/close.svg'?>" alt="Menu close icon">
            </a>
        </div>
    </div>
    <div style="background-image: url('<?=get_field('header_background_before_slider_load')?>');height: 100vh;
                                                                                                max-height: 100vh;
                                                                                                background-position: center;
                                                                                                background-repeat: no-repeat;
                                                                                                background-size: cover;">
        <div class="header-carousel owl-carousel owl-theme" style=" background-image: url('<?=get_field('header_background_before_slider_load')?>;">
            <?php
            if( have_rows('header_slider_home') ) {
                while( have_rows('header_slider_home') ) : the_row(); ?>

                    <div class="item item-slide" style=" background-image: url('<?=get_sub_field('slide_image')?>;">
                        <div class="home-slider-image-wrap">
                            <img src="<?=get_field('main_logo_on_header_slider_1')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_2')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_3')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_4')?>" />
                        </div>
                    </div>

                <?php endwhile;

            } ?>
        </div>
    </div>
    <div class="arrow-dots">
        <span>.</span>
        <span>.</span>
        <span>.</span>
    </div>
    <img class="arrow-down" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.png'?>" alt="Menu close icon">
</header>


<?php } elseif (is_page_template('page-home3.php') ) { ?>

<header>
    <div class="menu-wrap">
        <div class="container">
            <a href="<?=get_home_url();?> " class="header-logo">
                <img  src="<?=get_field('logo_in_sticky_nav_home', $front_page_id)?>" />
            </a>
            <nav class="top-menu">

                <?php wp_nav_menu(array(
                    'menu' => 'Header menu',
                    'theme_location' => 'main_menu',
                    'container' => '',
                    'items_wrap' => '<ul class="main-menu-list %2$s">%3$s</ul>',
                    'items_class' => 'menu-link',
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => '3',
                )); ?>
            </nav>
            <a class="menu-icon-link" href="javascript:void(0);">
                <img class="menu-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/menu.svg'?>" alt="Menu toggle icon" />
            </a>
            <a class="close-menu" href="javascript:void(0);" >
                <img src="<?=get_stylesheet_directory_uri().'/assets/img/close.svg'?>" alt="Menu close icon">
            </a>
        </div>
    </div>
    <div style="background-image: url('<?=get_field('header_background_before_slider_load')?>');height: 100vh;
                                                                                                max-height: 100vh;
                                                                                                background-position: center;
                                                                                                background-repeat: no-repeat;
                                                                                                background-size: cover;">
        <div class="header-carousel owl-carousel owl-theme" style=" background-image: url('<?=get_field('header_background_before_slider_load')?>;">
            <?php
            if( have_rows('header_slider_home') ) {
                while( have_rows('header_slider_home') ) : the_row(); ?>

                    <div class="item item-slide" style=" background-image: url('<?=get_sub_field('slide_image')?>;">
                        <div class="home-slider-image-wrap">
                            <img src="<?=get_field('main_logo_on_header_slider_1')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_2')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_3')?>" />
                            <img src="<?=get_field('main_logo_on_header_slider_4')?>" />
                        </div>
                    </div>

                <?php endwhile;

            } ?>
        </div>
    </div>
    <div class="arrow-arrow">
        <img class="arrow-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.svg'?>" >
        <img class="arrow-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.svg'?>" >
        <img class="arrow-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.svg'?>" >
        <img src="<?=get_stylesheet_directory_uri().'/assets/img/arrow-down.png'?>" alt="Menu close icon">

    </div>

</header>

<?php } else { ?>


<header class="fixed default-bg">
    <div class="menu-wrap">
        <div class="container">
            <a href="<?=get_home_url();?>  " class="header-logo">
                <img  src="<?=get_field('logo_in_sticky_nav_home', $front_page_id)?>" />
            </a>
            <nav class="top-menu">

                <?php wp_nav_menu(array(
                    'menu' => 'Header menu',
                    'theme_location' => 'main_menu',
                    'container' => '',
                    'items_wrap' => '<ul class="main-menu-list %2$s">%3$s</ul>',
                    'items_class' => 'menu-link',
                    'menu_class' => '',
                    'menu_id' => '',
                    'depth' => '3',
                )); ?>
            </nav>
            <a class="menu-icon-link" href="javascript:void(0);">
                <img class="menu-icon" src="<?=get_stylesheet_directory_uri().'/assets/img/menu.svg'?>" />
            </a>
            <a class="close-menu" href="javascript:void(0);" >
                <img src="<?=get_stylesheet_directory_uri().'/assets/img/close.svg'?>" alt="">
            </a>
        </div>
    </div>
</header>




<?php } ?>
