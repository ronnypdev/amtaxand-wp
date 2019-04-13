<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amtaxand
 */
$small_logo = get_field('small_logo');
$main_logo = get_field('main_logo');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amtaxand' ); ?></a>

    <!-- Header partial-->
    <header class="header--alternate">
        <div class="container">
            <div class="d-small-logo">
                <?php if ($small_logo): ?>
                    <img src="<?php echo $small_logo?>" alt="A &amp; Small logo"/></div>
                <?php endif; ?>
            <!-- Main Navigation-->
            <div class="d-flex justify-content-between">
                <a class="main-logo" href="#">
                    <?php if ($main_logo): ?>
                        <img src="<?php echo $main_logo; ?>" alt="A &amp; M Main logo"/>
                    <?php endif; ?>
                </a>
                <!-- Toggle Nav menu for mobile--><a class="cd-nav-trigger" href="#"><span></span></a>

                <?php
                    wp_nav_menu(array(
                            'theme_location' => 'mobile-menu',
                            'container' => 'div',
                            'container_class' => 'side-nav is-hidden'

                    ));
                ?>

                <?php
                wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'container_class' => 'main-nav',
                        'menu_class' => 'main-nav-list'
                    )
                );
                ?>

            </div>
        </div>
    </header>
    <!-- End Header partial-->

	<div id="content" class="site-content">
