<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<!DOCTYPE html>
<!--[if IE 7]>


<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]--> 

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0"/>
    <title><?php wp_title( '|', true, 'right' );?></title>


    <?php favicon_and_touch_icons(); ?>

    <?php wp_head(); ?>


</head>   

<!-- Push down the menu, when user is logged inn -->    
<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>

    <!-- Facebook start  -->    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nb_NO/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook End  -->    


    <div id="page" class="hfeed site" data-role="page">

        <?php
        //Change url
        if(is_front_page() || is_home()){
            $add_scroll_class = 'page-scroll ';
            $add_logo_id_scrol = 'top-scroll-header';
            $active_top_scroll =   'activge-top-scroll';
        }else{
            $add_collpase = 'navbar-top-collapse-id';
            $add_scroll_class = '';
        }
        ?>


       <div class="logo-bar-top">
            <div class="logo-container">
                <div class="top-logo">
                    <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_stylesheet_directory_uri().'/img/logo3.png' ?>">
                    </a>
                </div>
            </div>
        </div>
        <div id="header">
        <!-- Navigation -->
            

        
        <nav id="<?php if(isset($add_collpase)){echo $add_collpase;}?>"class="navbar navbar-custom navbar-fixed-top" role="navigation">
           
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="nav-togggle-stroke"></span>
                        <span class="nav-togggle-stroke"></span> 
                        <span class="nav-togggle-stroke"></span> 
                    </button>


                </div>
                
        
                    <?php
                    wp_nav_menu( array(
                        'menu'             => 'main_left',
                        'theme_location'    => 'main_left',
                        'depth' => 2,
                        'container' => 'div',  
                        'container_class' => 'collapse navbar-collapse navbar-left navbar-main-collapse',
                        'menu_class' => $add_scroll_class . 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                        <?php
                    wp_nav_menu( array(
                        'menu'             => 'main_right',
                        'theme_location'    => 'main_right',
                        'depth' => 2,
                        'container' => 'div',  
                        'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse',
                        'menu_class' => $add_scroll_class . 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>          
            </div>
         
        </nav>
        
    </div> <!--#header -->
    <div id="<?php if(isset($add_logo_id_scrol)) {echo $add_logo_id_scrol; }?>"></div>




<div id="bg-image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/background-image3.jpg');">
    

</div>

<div id="viewport">
    <div id="fullwidth-mobile" class="container" >
        
        <div id="top-spacer"></div>
    





