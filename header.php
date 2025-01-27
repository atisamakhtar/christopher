<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 *  
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php echo the_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1" />
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">  
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/carousel.css">
    <!-- <script src="<?php // echo get_stylesheet_directory_uri(); ?>/css/carousel.js"></script> -->
    <?php wp_head(); ?>
</head>

<body data-barba="wrapper">
    <input type="hidden" name="" id="caseModal" value="casetudies">
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container cs_container ">
                <!-- Brand -->
                <a class="navbar-brand" href="<?php echo site_url(); ?>/">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="Christopher"> 
                </a>
                <div class="Header_outer">
                    <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container'       => 'ul',
                    'menu_class'    => 'main_nav_bar'
                    ));
                ?>
                </div>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <!-- Navbar links --> 
            </div>
        </nav>    
    </header>
 
