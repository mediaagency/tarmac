<?php

function add_fav_icons( $wp_customize ) {

    $wp_customize->add_section( 'custom_fav_icons' , array(
        'title'       => __( 'Favicon and icons', 'themeslug' ),
        'description' => 'Manage favicon and touch-icons.'
    ) );

    /**
     * Favicon 
     * ----------------------------------------------------------------------------
     */  

    $wp_customize->add_setting( 'custom_fav_icons_favicon' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fav_icons_favicon', array(
        'label'    => __( 'Favicon', 'themeslug' ),
        'priority'    => 1,
        'description' => 'Click to add or change the favicon <br>(Recommended 32x32px ICO-file).',
        'section'  => 'custom_fav_icons',
        'settings' => 'custom_fav_icons_favicon'
    ) ) );

    /**
     * Touch icon - Androide and other devices
     * ----------------------------------------------------------------------------
     */  

    $wp_customize->add_setting( 'custom_touch_icon' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fav_icons_touch-icon', array(
        'label'    => __( 'Touch Icon', 'themeslug' ),
        'priority'    => 2,
        'description' => 'Touch icon for Android and other devices home-screen (Recommended 192x192px PNG-file).',
        'section'  => 'custom_fav_icons',
        'settings' => 'custom_touch_icon'
    ) ) );


    /**
     * Touch icon - iOS-devices
     * ----------------------------------------------------------------------------
     */  

    $wp_customize->add_setting( 'custom_apple_touch_icon' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fav_icons_apple-touch-icon', array(
        'label'    => __( 'iOS - Touch Icon', 'themeslug' ),
        'priority'    => 3,
        'description' => 'Touch icon for iOS home-screen<br>(Recommended 180x180px PNG-file).',
        'section'  => 'custom_fav_icons',
        'settings' => 'custom_apple_touch_icon'
    ) ) );



} // add_fav_icons()

add_action('customize_register', 'add_fav_icons');


function favicon_and_touch_icons() {

    $favicon = get_theme_mod( 'custom_fav_icons_favicon' );
    $touch_icon_normal = get_theme_mod( 'custom_touch_icon' );
    $touch_icon_apple = get_theme_mod( 'custom_apple_touch_icon' ); 
    

    if ($favicon != "") {
        echo "<!-- Favicon -->  "; 
        echo "<link rel='shortcut icon' href='" . $favicon .  "'>";
    }

    if ($touch_icon_normal != "") {
        echo "<!-- Icon for Android, and other devices -->  "; 
        echo "<link href='" . $touch_icon_normal. "' rel='icon' sizes='192×192' />";
    }

    if ($touch_icon_apple  != "") {
        echo "<!-- Icon for iOS-devices -->"; 
        echo "<link href='" . $touch_icon_apple . "' rel='apple-touch-icon' sizes='180×180' />";
    }
}

?>