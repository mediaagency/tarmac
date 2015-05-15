<?php


/**
 * All the cool functions 
 * ----------------------------------------------------------------------------
 */


// Select categories from dropdown
function get_categories_select() {
  $teh_cats = get_categories();
  $results;
 
  $count = count($teh_cats);
  for ($i=0; $i < $count; $i++) { 
    if (isset($teh_cats[$i]))
      $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
    else
      $count++;
  }
  return $results;
}


// Select  from dropdown
function get_pages_select() {
  $teh_pages = get_pages();
  $results;
 
  $count = count($teh_pages);
  for ($i=0; $i < $count; $i++) { 
    if (isset($teh_pages[$i]))
      $results[$teh_pages[$i]->post_name] = $teh_pages[$i]->post_title;
    else
      $count++;
  }
  return $results;
}


/**
 * Costumize price-information from the Theme appearence panel. 
 * ----------------------------------------------------------------------------
 */

function add_price_features ( $wp_customize ) {

$wp_customize->add_section( 'custom_price_section' , array(
    'title'       => __( 'Price', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Adjust the product prices',
) );



$wp_customize->add_setting( 'price_spirulina' );

$wp_customize->add_control(
    'frontpage_feature_1', 
    array(
        'label'    => __( 'Pris Spirulina (kr)', 'themeslug' ),
        'section'  => 'custom_price_section',
        'settings' => 'price_spirulina',
        'type'     => 'text',
    )
);



$wp_customize->add_setting( 'price_chlorella' );

$wp_customize->add_control(
    'frontpage_feature_2', 
    array(
        'label'    => __( 'Price Chlorella (kr)', 'themeslug' ),
        'section'  => 'custom_price_section',
        'settings' => 'price_chlorella',
        'type'     => 'text',
    )
);

}

add_action('customize_register', 'add_price_features');



/**
 * Form 1 - Chlorella
 * ----------------------------------------------------------------------------
 */

function add_theme_custom_form_1 ( $wp_customize ) {

$wp_customize->add_section( 'theme_custom_form_1' , array(
    'title'       => __( 'Form - Chlorella', 'themeslug' ),
    'priority'    => 40,
    'description' => 'Customize the Chlorella form.'
) );

$wp_customize->add_setting( 'theme_custom_form_heading_1' );

$wp_customize->add_control(
    'theme_custom_form_heading_1', 
    array(
        'label'    => __( 'Form heading', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_heading_1',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_1' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_1', 
    array(
        'label'    => __( 'Disclaimer ', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_disclaimer_1',
        'type'     => 'textarea'
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_link_1' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_link_1', 
    array(
        'label'    => __( 'Disclaimer link (URL)', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_disclaimer_link_1',
        'type'    => 'select',
        'choices' => get_pages_select()
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_link_text_1' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_link_text_1', 
    array(
        'label'    => __( 'Disclaimer link text', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_disclaimer_link_text_1',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_selling_text1_1' );

$wp_customize->add_control(
    'theme_custom_form_selling_text1_1', 
    array(
        'label'    => __( 'Selling text - Line 1', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_selling_text1_1',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_selling_text2_1' );

$wp_customize->add_control(
    'theme_custom_form_selling_text2_1', 
    array(
        'label'    => __( 'Selling text - Line 2', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_selling_text2_1',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_selling_text3_1' );

$wp_customize->add_control(
    'theme_custom_form_selling_text3_1', 
    array(
        'label'    => __( 'Selling text - Line 3', 'themeslug' ),
        'section'  => 'theme_custom_form_1',
        'settings' => 'theme_custom_form_selling_text3_1',
        'type'     => 'text'
    )
);


}

add_action('customize_register', 'add_theme_custom_form_1');


/**
 * Form 2 - Spirulina
 * ----------------------------------------------------------------------------
 */

function add_theme_custom_form_2 ( $wp_customize ) {

$wp_customize->add_section( 'theme_custom_form_2' , array(
    'title'       => __( 'Form - Spirulina', 'themeslug' ),
    'priority'    => 40,
    'description' => 'Customize the Spirulina form.'
) );

$wp_customize->add_setting( 'theme_custom_form_heading_2' );

$wp_customize->add_control(
    'theme_custom_form_heading_2', 
    array(
        'label'    => __( 'Form heading', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_heading_2',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_2' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_2', 
    array(
        'label'    => __( 'Disclaimer ', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_disclaimer_2',
        'type'     => 'textarea'
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_link_2' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_link_2', 
    array(
        'label'    => __( 'Disclaimer link (URL)', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_disclaimer_link_2',
        'type'    => 'select',
        'choices' => get_pages_select()
    )
);

$wp_customize->add_setting( 'theme_custom_form_disclaimer_link_text_2' );

$wp_customize->add_control(
    'theme_custom_form_disclaimer_link_text_2', 
    array(
        'label'    => __( 'Disclaimer link Text', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_disclaimer_link_text_2',
        'type'     => 'text'
    )
);


$wp_customize->add_setting( 'theme_custom_form_selling_text1_2' );

$wp_customize->add_control(
    'theme_custom_form_selling_text1_2', 
    array(
        'label'    => __( 'Selling text - Line 1', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_selling_text1_2',
        'type'     => 'text'
    )
);


$wp_customize->add_setting( 'theme_custom_form_selling_text2_2' );

$wp_customize->add_control(
    'theme_custom_form_selling_text2_2', 
    array(
        'label'    => __( 'Selling text - Line 2', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_selling_text2_2',
        'type'     => 'text'
    )
);

$wp_customize->add_setting( 'theme_custom_form_selling_text3_2' );

$wp_customize->add_control(
    'theme_custom_form_selling_text3_2', 
    array(
        'label'    => __( 'Selling text - Line 3', 'themeslug' ),
        'section'  => 'theme_custom_form_2',
        'settings' => 'theme_custom_form_selling_text3_2',
        'type'     => 'text'
    )
);




}

add_action('customize_register', 'add_theme_custom_form_2');





?>