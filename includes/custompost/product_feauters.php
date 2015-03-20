<?php
add_action('init', 'ma_tarmac_product_feauters_custom');
function ma_tarmac_product_feauters() {
	registrer_post_type( 'ma_tarmac_product_feauters', array( 
		'label' 			=> __('Product Feauters', 'ma_ls'),
		'singular_label'	=> __('Product Feauters', 'ma_ls'),
		'public'			=> true,
		'show_ui' 			=> true,
		'show_in_menu' 		=> true,
		'show_in_nav_menus' => true, 
		'menu_position' 	=> null,
		'menu_icon'			=> 'dashicons-editor-ol',
		'capability_type'	=> 'post',
		'hierarchical' 		=> false,
		'rewrite' 			=> array("slug", "product_feauters"),
		'supports'			=> array('title', 'editor')

	) );
}
?>