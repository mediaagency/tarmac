


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID )); // Get bg-image url ?> 
<div id="page-header" class="fluid-container" style="background-image: url('<?php echo $url; ?>');">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<!--Checks if the on/off button is on and display information accordingly.-->
		<?php if( @get_post_meta( $post->ID, 'ma_ta_section_header_onoff', true ) == 'ON' ):  ?>
			<!--Gets the button text from the custom post field. -->
			<?php echo @get_post_meta( $post->ID, 'ma_ta_section_header_btn_text', true ); ?>
			<!--Gets the button link from the custom post field. -->
			<?php echo @get_post_meta( $post->ID, 'ma_ta_section_header_btn_link', true ); ?>
			<!--Gets the sub header text from the custom post field. -->
			<?php echo @get_post_meta( $post->ID, 'ma_ta_section_header_sub', true ); ?>
		<?php endif; ?>
	<?php endwhile;	endif; ?>

</div>

