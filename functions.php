<?php
require_once( 'includes/wp_enqueue_assets.class.php' );
require_once( 'includes/navigation/wp_bootstrap_navwalker.php' );

/**
 * 1.0 Enqueue and registrer scripts/Styles 
 * ----------------------------------------------------------------------------
 */

/**
* Add resources
*/


//front-end
function ma_add_resources_front() {

	/* Javascript
	************/

	/* CSS
	************/

    //Load all fonts
    new wp_enqueue_assets( 'ma_theme_fonts_css', 'fonts/fonts.css', 'theme', '', 'style' );

	//main CSS file 
	new wp_enqueue_assets( 'ma_main_theme_css', 'style.css', 'theme', '', 'style' );

}
add_action( 'wp_enqueue_scripts', 'ma_add_resources_front' );

//Back-end 
function ma_add_resources_back() {

}
add_action( 'admin_enqueue_scripts', 'ma_add_resources_back' );


/**
 * 2.0 After theme setup. 
 * ----------------------------------------------------------------------------
 */

add_action( 'after_setup_theme', 'ma_wpt_setup' );
if( ! function_exists( 'wpt_setup' ) ):
        function ma_wpt_setup() {
        	//Registrer nav-menu
        	register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );

        	//Setup custom image size 

        	//Load text domaion
        	load_theme_textdomain('ma_ls', get_template_directory() . '/languages');
        }
endif;

/**
 * 3.0 Push down Navigation 
 * Fixe issue for admin users navbar.
 * ----------------------------------------------------------------------------
 */

add_filter('body_class', 'mbe_body_class');
function mbe_body_class($classes){
    if(is_user_logged_in()){
        $classes[] = 'body-logged-in';
    } else{
        $classes[] = 'body-logged-out';
    }
    return $classes;
}

//Add the CSS to push down body on wadmin view
add_action('wp_head', 'ma_wp_head');
function ma_wp_head(){
    echo '<style>'.PHP_EOL;

    echo 'body{ padding-top: 0px !important; }'.PHP_EOL;
    // Using custom CSS class name.
    echo 'body.body-logged-in .navbar { top: 28px !important; }'.PHP_EOL;
    // Using WordPress default CSS class name.
    echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    echo '</style>'.PHP_EOL;
}

/**
 * 4.0 Widgets 
 * ----------------------------------------------------------------------------
 */

function ma_add_sidebar_widget() {

    if (function_exists('register_sidebar')) {


        register_sidebar(array(
            'name' => 'Page',
            'id'   => 'page',
            'description'   => 'Appears in the sidebar of page.',
            'before_widget' => '<div class="mb-m"><div id="%1$s" class="singel-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title-container mb-s">
                                <div class="widget-title-stroke">
                                <h4  class="widget-title-text-color widget-title-text-bg widget-title-size">',
            'after_title'   => '</h4></div></div>'
        ));

        register_sidebar(array(
            'name' => 'Post',
            'id'   => 'post',
            'description'   => 'Appears in the sidebar of post',
            'before_widget' => '<div class="mb-m"><div id="%1$s" class="singel-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title-container mb-s">
                                <div class="widget-title-stroke">
                                <h4  class="widget-title-text-color widget-title-text-bg widget-title-size">',
            'after_title'   => '</h4></div></div>'
        ));

        register_sidebar(array(
            'name' => 'Footer Left',
            'id'   => 'footer-left',
            'description'   => 'Appears in the left side of the footer.',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="mb-s"><div class="footer-widget-title section-title mb-s"><h4 class="section-title-bg">',
            'after_title'   => '</h4></div></div>'
        ));

        register_sidebar(array(
            'name' => 'Footer Middle',
            'id'   => 'footer-middle',
            'description'   => 'Appears in the middle of the footer.',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="mb-s"><div class="footer-widget-title section-title mb-s"><h4 class="section-title-bg">',
            'after_title'   => '</h4></div></div>'
        ));

        register_sidebar(array(
            'name' => 'Footer Right',
            'id'   => 'footer-right',
            'description'   => 'Appears in the right side of the footer.',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="mb-s"><div class="footer-widget-title section-title mb-s"><h4 class="section-title-bg">',
            'after_title'   => '</h4></div></div>'
        ));

        
    }
}
add_action( 'widgets_init', 'ma_add_sidebar_widget' );


/*****************
*
* 5. Theme functionality
*
******************/


//Post product
//require_once( 'includes/custompost/post_product.class.php' );
?>