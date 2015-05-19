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



/**
 * Frontpage - Section 1 (Products display)
 * ----------------------------------------------------------------------------
 */


function add_fp_section_1 ( $wp_customize ) {

    $wp_customize->add_section( 'costum_fp_sections_1' , array(
        'title'       => __( 'Frontpage - Products', 'themeslug' ),
        'description' => 'Make changes to the product section on the frontpage.'
    ) );

    $wp_customize->add_setting( 'costum_fp_section_heading_1' );

    $wp_customize->add_control(
        'theme_custom_feature_heading_1',
        array(
            'label'    => __( 'Heading', 'themeslug' ),
            'priority'    => 10,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_heading_1',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_1' );

    $wp_customize->add_control(
        'theme_custom_feature_excerpt_1',
        array(
            'label'    => __( 'Excerpt', 'themeslug' ),
            'priority'    => 11,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_excerpt_1',
            'type'     => 'textarea',
        )
    );


    /****** Chlorella Container ******/

    $wp_customize->add_setting( 'costum_fp_section_heading_chlorella_1' );

    $wp_customize->add_control(
        'costum_fp_section_heading_chlorella_1',
        array(
            'label'    => __( 'Chlorella - Heading', 'themeslug' ),
            'priority'    => 20,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_heading_chlorella_1',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_chlorella_1' );

    $wp_customize->add_control(
        'costum_fp_section_excerpt_chlorella_1',
        array(
            'label'    => __( 'Chlorella - Excerpt', 'themeslug' ),
            'priority'    => 21,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_excerpt_chlorella_1',
            'type'     => 'textarea',
        )
    );


    $wp_customize->add_setting( 'costum_fp_section_btn_chlorella_txt_1' );

    $wp_customize->add_control(
        'costum_fp_section_btn_chlorella_txt_1',
        array(
            'label'    => __( 'Chlorella - Button Read more (Text)', 'themeslug' ),
            'priority'    => 22,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_chlorella_txt_1',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_chlorella_1' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_chlorella_1',
        array(
            'label'    => __( 'Chlorella - Button Read more (page)', 'themeslug' ),
            'priority'    => 23,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_link_chlorella_1',
            'type'    => 'select',
            'choices' => get_pages_select()
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_chlorella_txt_11' );

    $wp_customize->add_control(
        'costum_fp_section_btn_chlorella_txt_11',
        array(
            'label'    => __( 'Chlorella - Button Buy Text', 'themeslug' ),
            'priority'    => 24,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_chlorella_txt_11',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_chlorella_11' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_chlorella_11',
        array(
            'label'    => __( 'Chlorella - Button buy (link)', 'themeslug' ),
            'priority'    => 25,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_link_chlorella_11',
            'type'     => 'text',
        )
    );


    /****** Spirulina Container ******/

    $wp_customize->add_setting( 'costum_fp_section_heading_spirulina_1' );

    $wp_customize->add_control(
        'costum_fp_section_heading_spirulina_1',
        array(
            'label'    => __( 'Spirulina - Heading', 'themeslug' ),
            'priority'    => 30,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_heading_spirulina_1',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_spirulina_1' );

    $wp_customize->add_control(
        'costum_fp_section_excerpt_spirulina_1',
        array(
            'label'    => __( 'Spirulina - Excerpt', 'themeslug' ),
            'priority'    => 31,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_excerpt_spirulina_1',
            'type'     => 'textarea',
        )
    );


    $wp_customize->add_setting( 'costum_fp_section_btn_spirulina_txt_1' );

    $wp_customize->add_control(
        'costum_fp_section_btn_spirulina_txt_1',
        array(
            'label'    => __( 'spirulina - Button Read more (Text)', 'themeslug' ),
            'priority'    => 32,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_spirulina_txt_1',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_spirulina_1' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_spirulina_1',
        array(
            'label'    => __( 'spirulina - Button Read more (page)', 'themeslug' ),
            'priority'    => 33,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_link_spirulina_1',
            'type'    => 'select',
            'choices' => get_pages_select()
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_spirulina_txt_11' );

    $wp_customize->add_control(
        'costum_fp_section_btn_spirulina_txt_11',
        array(
            'label'    => __( 'spirulina - Button Buy Text', 'themeslug' ),
            'priority'    => 34,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_spirulina_txt_11',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_spirulina_11' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_spirulina_11',
        array(
            'label'    => __( 'spirulina - Button buy (link)', 'themeslug' ),
            'priority'    => 35,
            'section'  => 'costum_fp_sections_1',
            'settings' => 'costum_fp_section_btn_link_spirulina_11',
            'type'     => 'text',
        )
    );


}
add_action('customize_register', 'add_fp_section_1');




/**
 * Frontpage - Section 2 (References)
 * ----------------------------------------------------------------------------
 */

function add_fp_section_2 ( $wp_customize ) {

    $wp_customize->add_section( 'costum_fp_sections_2' , array(
        'title'       => __( 'Frontpage - Advantages', 'themeslug' ),
        'description' => 'Make changes to the references section on the frontpage.'
    ) );

    $wp_customize->add_setting( 'costum_fp_section_heading_2' );

    $wp_customize->add_control(
        'theme_custom_feature_heading_2',
        array(
            'label'    => __( 'Heading', 'themeslug' ),
            'priority'    => 10,
            'section'  => 'costum_fp_sections_2',
            'settings' => 'costum_fp_section_heading_2',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_2' );

    $wp_customize->add_control(
        'theme_custom_feature_excerpt_2',
        array(
            'label'    => __( 'Excerpt', 'themeslug' ),
            'priority'    => 11,
            'section'  => 'costum_fp_sections_2',
            'settings' => 'costum_fp_section_excerpt_2',
            'type'     => 'textarea',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_txt_2' );

    $wp_customize->add_control(
        'costum_fp_section_btn_txt_2',
        array(
            'label'    => __( 'Button Text', 'themeslug' ),
            'priority'    => 12,
            'section'  => 'costum_fp_sections_2',
            'settings' => 'costum_fp_section_btn_txt_2',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_2' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_2',
        array(
            'label'    => __( 'Button go to page', 'themeslug' ),
            'priority'    => 13,
            'section'  => 'costum_fp_sections_2',
            'settings' => 'costum_fp_section_btn_link_2',
            'type'    => 'select',
            'choices' => get_categories_select()
        )
    );


}
add_action('customize_register', 'add_fp_section_2');


/**
 *  Frontpage - Section 3 (nutrition)
 * ----------------------------------------------------------------------------
 */

function add_fp_section_3 ( $wp_customize ) {

    $wp_customize->add_section( 'costum_fp_sections_3' , array(
        'title'       => __( 'Frontpage - Nutrition', 'themeslug' ),
        'description' => 'Make changes to the product section on the frontpage.'
    ) );

    $wp_customize->add_setting( 'costum_fp_section_heading_3' );

    $wp_customize->add_control(
        'theme_custom_feature_heading_3',
        array(
            'label'    => __( 'Heading', 'themeslug' ),
            'priority'    => 10,
            'section'  => 'costum_fp_sections_3',
            'settings' => 'costum_fp_section_heading_3',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_3' );

    $wp_customize->add_control(
        'theme_custom_feature_excerpt_3',
        array(
            'label'    => __( 'Excerpt', 'themeslug' ),
            'priority'    => 11,
            'section'  => 'costum_fp_sections_3',
            'settings' => 'costum_fp_section_excerpt_3',
            'type'     => 'textarea',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_txt_3' );

    $wp_customize->add_control(
        'costum_fp_section_btn_txt_3',
        array(
            'label'    => __( 'Button Text', 'themeslug' ),
            'priority'    => 12,
            'section'  => 'costum_fp_sections_3',
            'settings' => 'costum_fp_section_btn_txt_3',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_3' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_3',
        array(
            'label'    => __( 'Button go to page', 'themeslug' ),
            'priority'    => 13,
            'section'  => 'costum_fp_sections_3',
            'settings' => 'costum_fp_section_btn_link_3',
            'type'    => 'select',
            'choices' => get_categories_select()
        )
    );


}
add_action('customize_register', 'add_fp_section_3');


/**
 *  Frontpage - Section 4 (Costumers)
 * ----------------------------------------------------------------------------
 */

function add_fp_section_4 ( $wp_customize ) {

    $wp_customize->add_section( 'costum_fp_sections_4' , array(
        'title'       => __( 'Frontpage - Costumers', 'themeslug' ),
        'description' => 'Make changes to the product section on the frontpage.'
    ) );

    $wp_customize->add_setting( 'costum_fp_section_heading_4' );

    $wp_customize->add_control(
        'theme_custom_feature_heading_4',
        array(
            'label'    => __( 'Heading', 'themeslug' ),
            'priority'    => 10,
            'section'  => 'costum_fp_sections_4',
            'settings' => 'costum_fp_section_heading_4',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_4' );

    $wp_customize->add_control(
        'theme_custom_feature_excerpt_4',
        array(
            'label'    => __( 'Excerpt', 'themeslug' ),
            'priority'    => 11,
            'section'  => 'costum_fp_sections_4',
            'settings' => 'costum_fp_section_excerpt_4',
            'type'     => 'textarea',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_txt_4' );

    $wp_customize->add_control(
        'costum_fp_section_btn_txt_4',
        array(
            'label'    => __( 'Button Text', 'themeslug' ),
            'priority'    => 12,
            'section'  => 'costum_fp_sections_4',
            'settings' => 'costum_fp_section_btn_txt_4',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_btn_link_4' );

    $wp_customize->add_control(
        'costum_fp_section_btn_link_4',
        array(
            'label'    => __( 'Button go to page', 'themeslug' ),
            'priority'    => 13,
            'section'  => 'costum_fp_sections_4',
            'settings' => 'costum_fp_section_btn_link_4',
            'type'    => 'select',
            'choices' => get_categories_select()
        )
    );


}
add_action('customize_register', 'add_fp_section_4');

/**
 *  Frontpage - Section 4 (Bottom form)
 * ----------------------------------------------------------------------------
 */


function add_fp_section_5 ( $wp_customize ) {

    $wp_customize->add_section( 'costum_fp_sections_5' , array(
        'title'       => __( 'Frontpage - Bottom', 'themeslug' ),
        'description' => 'Make changes to the product section on the frontpage.'
    ) );

    $wp_customize->add_setting( 'costum_fp_section_heading_5' );

    $wp_customize->add_control(
        'theme_custom_feature_heading_5',
        array(
            'label'    => __( 'Heading', 'themeslug' ),
            'priority'    => 10,
            'section'  => 'costum_fp_sections_5',
            'settings' => 'costum_fp_section_heading_5',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting( 'costum_fp_section_excerpt_5' );

    $wp_customize->add_control(
        'theme_custom_feature_excerpt_5',
        array(
            'label'    => __( 'Excerpt', 'themeslug' ),
            'priority'    => 11,
            'section'  => 'costum_fp_sections_5',
            'settings' => 'costum_fp_section_excerpt_5',
            'type'     => 'textarea',
        )
    );


}
add_action('customize_register', 'add_fp_section_5');


?>