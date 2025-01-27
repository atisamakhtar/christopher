<?php

add_theme_support( 'post-thumbnails' );

//custom logo 
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
// end here
 

//custom navigation menu header and footer 
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
        'header' => __( 'Header Menu' ), 
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
// end here

function your_submenu_class($menu) {
$menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu dropdown-menu" /',$menu);  
return $menu;  
} 
add_filter('wp_nav_menu','your_submenu_class');

//custom widgets
function wpb_widgets_init() { 
    register_sidebar( array(
        'name' => __( 'Address 1', 'wpb' ),
        'id' => 'address_1',
        'description' => __( 'Address 1', 'wpb' ), 
        'before_widget' => '<div id="%1$s" class="short_des widget %2$s">',
        'after_widget' => '</div>' 
    )); 
    register_sidebar( array(
        'name' => __( 'Address 2', 'wpb' ),
        'id' => 'address_2',
        'description' => __( 'Address 2', 'wpb' ), 
        'before_widget' => '<div id="%1$s" class="short_des widget %2$s">',
        'after_widget' => '</div>' 
    )); 
    register_sidebar( array(
        'name' => __( 'Address 3', 'wpb' ),
        'id' => 'address_3',
        'description' => __( 'Address 3', 'wpb' ), 
        'before_widget' => '<div id="%1$s" class="short_des widget %2$s">',
        'after_widget' => '</div>' 
    ));  
    register_sidebar( array(
        'name' => __( 'Social Icons', 'wpb' ),
        'id' => 'social_icons',
        'description' => __( 'Social Icons', 'wpb' ), 
        'before_widget' => '<div id="%1$s" class="short_des widget %2$s">',
        'after_widget' => '</div>' 
    ));  
} 
add_action( 'widgets_init', 'wpb_widgets_init' );   
//end here 
 
// create custom post for Use Cases
add_action('init', 'caseStudies');
function caseStudies()
{
    $labels = array(
        'name' => _x('Use Cases', 'post type general name'),
        'singular_name' => _x('caseStudies', 'post type singular name'),
        'add_new' => _x('Add New', 'Use Cases'),
        'add_new_item' => __('Add New Use Cases'),
        'edit_item' => __('Edit Use Cases'),
        'new_item' => __('New Use Cases'),
        'view_item' => __('View Use Cases'),
        'search_items' => __('Search Use Cases'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => true,   
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor','page-attributes','excerpt')
    );
    register_post_type('caseStudies', $args);
} 
// create custom post for Use Cases end here
function BgColorScript() {

    wp_enqueue_script('bgColorChange', get_template_directory_uri() . '/js/cs-Scroll.js');
    wp_localize_script('bgColorChange', 'bgColorChangeVars', array(
        'alert' => get_field("menu_background_colors",8)
        )
    );

 }
 add_action('wp_enqueue_scripts', 'BgColorScript');

add_action('wp_body_open', function() {
    if (is_single() && (is_page_template('single.php') || is_page_template('single-caseStudiesd.php'))) {
        echo '<style>header , nav { display: none !important; }</style>';
    }
});

// function custom_body_classes($classes) {
//     // Check if it's the `single.php` template
//     if (is_single() && !is_singular('caseStudies')) {
//         $classes[] = 'single-template-class';
//     }

//     // Check if it's the `home-template.php` (assuming it's a custom page template)
//     if (is_page_template('home-template.php')) {
//         $classes[] = 'home-template-class';
//     }

//     // Check if it's the `single-caseStudies.php` template
//     if (is_singular('caseStudies')) {
//         $classes[] = 'single-caseStudies-class';
//     }

//     return $classes;
// }
// add_filter('body_class', 'custom_body_classes');

// function add_loop_attr_inline_script() {
//     echo "<script>
//         document.addEventListener('DOMContentLoaded', function () {
//             const video = document.querySelector('video#front_video');
//             if (video) {
//                 video.setAttribute('loop', 'loop');
//             }
//         });
//     </script>";
// }
// add_action('wp_head', 'add_loop_attr_inline_script');

?>