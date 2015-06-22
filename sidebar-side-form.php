<?php
/**
 * The Sidebar containing the form to buy products.
 *
 */
?>
<div id="secondary">

<?php $product_name = strtolower(get_post_meta($post->ID, 'ma_product_post_name', true))  ?>

<?php 

function pickSidebarForm($product) {

	if ($product == 'spirulina' ) {
		get_template_part( 'template/content', 'form-side-spirulina' );
	}

	elseif ($product == 'chlorella' ) {
		get_template_part( 'template/content', 'form-side-chlorella' );
	}

	elseif ($product == 'blank') {
		// do nothing
	}
	else {

		$random = rand(0,1);

		if ($random == '0') {
			get_template_part( 'template/content', 'form-side-chlorella' );
		}

		else {
			get_template_part( 'template/content', 'form-side-spirulina' );
		}

	}

} // End function

pickSidebarForm($product_name);

?>




</div><!-- #secondary -->
