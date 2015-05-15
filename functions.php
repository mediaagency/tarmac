<?php
require_once( 'includes/wp_enqueue_assets.class.php' );
require_once( 'includes/class-metabox.php' );
require_once( 'includes/navigation/wp_bootstrap_navwalker.php' );
require_once( 'includes/theme_customize.php' );


/**
 * 1.0 Enqueue and registrer scripts/Styles 
 * ----------------------------------------------------------------------------
 */

/**
* Add resources
*/


//front-end
function ma_add_resources_front() {

	/* JavaScript 
	************/

    //Bottstrap javascript
    new wp_enqueue_assets( 'ma_theme_bootstrap_JS', 'js/bootstrap/bootstrap.min.js', 'theme', 'jquery', 'script' );

    //Bottstrap javascript
    new wp_enqueue_assets( 'ma_theme_javascript', 'js/functions.js', 'theme', 'jquery', 'script' );

    //Animation - Greensock TweenMax
    //new wp_enqueue_assets( 'ma_theme_tween_max', 'js/greensock/TweenMax.min.js', 'theme', 'jquery', 'script' );

    //Animation - Greensock EasePack
    //new wp_enqueue_assets( 'ma_theme_ease_pack', 'js/greensock/EasePack.min.js', 'theme', 'jquery', 'script' );

    //Animation - Animate Scroll
    //new wp_enqueue_assets( 'ma_theme_animate_scroll', 'js/animate-scroll/animate-scroll.js', 'theme', 'jquery', 'script' );


	/* CSS
	************/
    //bootstrap CSS
    new wp_enqueue_assets( 'ma_theme_bootstrap_css', 'css/bootstrap.css', 'theme', '', 'style' );
    //Load all fonts
    new wp_enqueue_assets( 'ma_theme_fonts_css', 'fonts/fonts.css', 'theme', '', 'style' );

    //Load font Awesome
    new wp_enqueue_assets( 'ma_font_awesome_css', 'includes/icons/font-awesome-4.3.0/css/font-awesome.min.css', 'theme', '', 'style' );
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
        	register_nav_menu( 'main_left', __( 'Header - Left', 'wptuts' ) );
                register_nav_menu( 'main_right', __( 'Header - Right', 'wptuts' ) );
            //Allowing post-thumbnails
            add_theme_support( 'post-thumbnails' );
        	
            //Setup custom thumbnail size 
            add_image_size( 'header', 970, 720, true ); 
            add_image_size( 'fp_article', 410, 290, true ); 
            add_image_size( 'image_wide', 1140, 500, true ); 
            add_image_size( 'single_post', 800, 500, true );
            add_image_size( 'square', 400, 400, true ); 


        	//Load text domaion
        	load_theme_textdomain('ma_ls', get_template_directory() . '/languages');
        }
endif;


function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
  }
}

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

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
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
            'name' => 'Bottom - Chlorella',
            'id'   => 'chlorella',
            'description'   => 'Appears in the sidbar and bottom form',
            'before_widget' => '<div class="mb-m"><div id="%1$s" class="singel-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title-container mb-s">
                                <div class="widget-title-stroke">
                                <h4  class="widget-title-text-color widget-title-text-bg widget-title-size">',
            'after_title'   => '</h4></div></div>'
        ));


        register_sidebar(array(
            'name' => 'Bottom - Spirulina',
            'id'   => 'spirulina',
            'description'   => 'Appears in the sidbar and bottom form',
            'before_widget' => '<div class="mb-m"><div id="%1$s" class="singel-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title-container mb-s">
                                <div class="widget-title-stroke">
                                <h4  class="widget-title-text-color widget-title-text-bg widget-title-size">',
            'after_title'   => '</h4></div></div>'
        ));

        register_sidebar(array(
            'name' => 'Side - Chlorella',
            'id'   => 'sidebar_chlorella',
            'description'   => 'Appears in the sidbar and bottom form',
            'before_widget' => '<div class="mb-m"><div id="%1$s" class="singel-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title-container mb-s">
                                <div class="widget-title-stroke">
                                <h4  class="widget-title-text-color widget-title-text-bg widget-title-size">',
            'after_title'   => '</h4></div></div>'
        ));


        register_sidebar(array(
            'name' => 'Side - Spirulina',
            'id'   => 'sidebar_spirulina',
            'description'   => 'Appears in the sidbar and bottom form',
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
            'before_title'  => '',
            'after_title'   => ''
        ));

        register_sidebar(array(
            'name' => 'Footer Middle',
            'id'   => 'footer-middle',
            'description'   => 'Appears in the middle of the footer.',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => ''
        ));

        register_sidebar(array(
            'name' => 'Footer Right',
            'id'   => 'footer-right',
            'description'   => 'Appears in the right side of the footer.',
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => ''
        ));
    }
}
add_action( 'widgets_init', 'ma_add_sidebar_widget' );


/*****************
*
* 5. Theme functionality
*
******************/

/**
 * Metabox - Pages 
 * ----------------------------------------------------------------------------
 */

require_once('includes/class-metabox.php');


/**
 * Metabox on page 
 * ----------------------------------------------------------------------------
 */

$meta_content_q6 = array(
    'Product Name' => 'ma_product_name', //Target id
);

// Type of input field
$meta_type_q6 = array(  
    'Product Name'      => 'text',
);

//if there is a select field add this 

$meta_type_select_q6 = array(

);

//Create metabox
new ma_create_metabox(
            'page', //Post type
            'ma_ls_feauter_post', // Meta Slug
            'Type name of product', //Meta Title
            'ma_ls', //ma Language slug
            'normal', //Placement
            'low', // Priority
            'ma_ls_product_nonce_slug', //Nonce 1
            'ma_ls_product_section_nonce_name', //nonce 2
            $meta_content_q6, //Content
            $meta_type_q6, //Meta type input and how many input fields
            $meta_type_select_q6 //meta type select box. 
);


/**
 * Metabox on posts 
 * ----------------------------------------------------------------------------
 */
    
$meta_content_q7 = array(
    'Product Name' => 'ma_product_post_name', //Target id
);

// Type of input field
$meta_type_q7 = array(  
    'Product Name'      => 'text',
);

//if there is a select field add this 

$meta_type_select_q7 = array(

);

//Create metabox
new ma_create_metabox(
            'post', //Post type
            'ma_ls_product_post', // Meta Slug
            'Type name of product', //Meta Title
            'ma_ls', //ma Language slug
            'normal', //Placement
            'low', // Priority
            'ma_ls_product_post_nonce_slug', //Nonce 1
            'ma_ls_product_post_section_nonce_name', //nonce 2
            $meta_content_q7, //Content
            $meta_type_q7, //Meta type input and how many input fields
            $meta_type_select_q7 //meta type select box. 
);





?>