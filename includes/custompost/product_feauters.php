<?php
add_action('init', 'ma_tarmac_product_feauters_custom');
function ma_tarmac_product_feauters_custom() {
	register_post_type( 'ma_tarmac_product_f', array( 
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
	flush_rewrite_rules();
}

//metabox content
$meta_content = array (
	'Link to product' => 'ma_tarmac_link_post',
);

$meta_type = array ( 
	'Link to product' => 'posts'
);

$meta_type_select = array (

);

new ma_create_metabox(
	'ma_tarmac_product_f',
	'ma_tarmac_post_link_slug',
	'Parrent product',
	'ma_ls',
	'normal',
	'low',
	'ma_tarmac_link_nonce_slug',
	'ma_tarmac_link_nonce_name',
	$meta_content,
	$meta_type,
	$meta_type_select
);

?>