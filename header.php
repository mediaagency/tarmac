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

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1049730585067627');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1049730585067627&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



<!-- Google-kode for remarketing-taggen -->
<!--Remarketing-tagger kan ikke knyttes til personlig identifiserende informasjon eller legges inn på sider som er relatert til sensitive kategorier. Du finner mer informasjon og flere instruksjoner for hvordan du konfigurerer taggen, på: http://google.com/ads/remarketingsetup-->
<div style="display:none">
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 949051441;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/949051441/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
</div> <!-- .style="display:none -->

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
    





