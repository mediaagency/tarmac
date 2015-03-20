<?php
require_once( '../includes/class-metabox.php' );

/**
* Add metafield with product select option
*/

//metabox content
$meta_content = array (
	'Post Type' => 'ma_tarmac_post_type',
);

$meta_type = array ( 
	'Post Type' => 'checkbox'
);

$meta_type_select = array (

);

new ma_create_metabox(
	'post',
	'ma_tarmac_post_type_slug',
	'Mark as product Post',
	'ma_ls',
	'normal',
	'ma_tarmac_posttype_nonce_slug',
	'ma_tarmac_posttype_nonce_name',
	$meta_content,
	$meta_type,
	$meta_type_select
);

?>