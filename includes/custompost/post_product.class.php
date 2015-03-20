<?php
/**
* Add metafield with product select option
*/

//metabox content
$meta_content = array (
	'Product' => 'ma_tarmac_post_type',
);

$meta_type = array ( 
	'Product' => 'checkbox'
);

$meta_type_select = array (

);

new ma_create_metabox(
	'post',
	'ma_tarmac_post_type_slug',
	'Post Type',
	'ma_ls',
	'normal',
	'low',
	'ma_tarmac_posttype_nonce_slug',
	'ma_tarmac_posttype_nonce_name',
	$meta_content,
	$meta_type,
	$meta_type_select
);

?>